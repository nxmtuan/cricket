(() => {
	document
		.getElementById('btnDropdown')
		.addEventListener('click', function (event) {
			event.stopPropagation(); // Ngăn sự kiện lan ra ngoài
			document.getElementById('dropdownList').classList.toggle('hidden');
		});

	// Đóng dropdown khi click ra ngoài
	window.addEventListener('click', function () {
		document.getElementById('dropdownList').classList.add('hidden');
	});

	// Ngăn dropdown bị đóng khi click vào chính nó
	document
		.getElementById('dropdownList')
		.addEventListener('click', function (event) {
			event.stopPropagation();
		});

	// Lắng nghe sự kiện click trên từng mục li
	document.querySelectorAll('#dropdownList li').forEach((item) => {
		item.addEventListener('click', function () {
			document.getElementById('btnDropdown').childNodes[0].nodeValue =
				this.textContent.trim();
			document.getElementById('dropdownList').classList.add('hidden'); // Ẩn dropdown sau khi chọn
		});
	});
})();
