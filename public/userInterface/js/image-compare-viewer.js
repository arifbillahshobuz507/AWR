const element = document.getElementById("image-compare");
const options = {
    controlColor: "#FFFFFF",
    controlShadow: false,
    addCircle: true,
    addCircleBlur: true,
    smoothing: false,
    showLabels: true,
    labelOptions: {
        before: "Before",
        after: "After",
    },
    maxHeight: 300,
};

const viewer1 = new ImageCompare(element, options).mount();

const imageCompareElement = document.getElementById("image-compare");
const labelBefore = imageCompareElement.querySelector(".icv__label-before");
const labelAfter = imageCompareElement.querySelector(".icv__label-after");
const control = imageCompareElement.querySelector(".icv__control");

function adjustLabelOpacity() {
    const controlRect = control.getBoundingClientRect();
    const beforeRect = labelBefore.getBoundingClientRect();
    const afterRect = labelAfter.getBoundingClientRect();

    if (controlRect.right > beforeRect.left && controlRect.left < beforeRect.right) {
        labelBefore.style.opacity = "0";
    } else {
        labelBefore.style.opacity = "1";
    }

    if (controlRect.left < afterRect.right && controlRect.right > afterRect.left) {
        labelAfter.style.opacity = "0";
    } else {
        labelAfter.style.opacity = "1";
    }
}

imageCompareElement.addEventListener("mousemove", adjustLabelOpacity);
imageCompareElement.addEventListener(
    "touchmove",
    (event) => {
        event.preventDefault();
        adjustLabelOpacity();
    },
    { passive: false }
);
