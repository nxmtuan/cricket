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

	function initTabs() {
		const tabButtons = document.querySelectorAll('.tab-btn');
		const subTabButtons = document.querySelectorAll('.sub-tab');
		const contentDiv = document.getElementById('content');

		// Dữ liệu giả lập
		const data = {
			test: {
				'test-batter': `
                        <table class="w-full mt-3 text-sm">
                            <thead class="text-gray-500 text-left">
                                <tr>
                                    <th class="pb-2 text-center">Rank</th>
                                    <th class="pb-2">Team</th>
                                    <th class="pb-2 text-center">Rating</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                                <tr>
                                    <td class="py-1 text-center">1</td>
                                    <td class="py-1">Australia</td>
                                    <td class="py-1 text-center">127</td>
                                </tr>
                            </tbody>
                        </table>
                    `,
				batter: `<p class="mt-3 text-center">Test - Batter Content</p>`,
				bowler: `<p class="mt-3 text-center">Test - Bowler Content</p>`,
				alr: `<p class="mt-3 text-center">Test - All Rounder Content</p>`,
			},
			odi: {
				'test-batter': `<p class="mt-3 text-center">ODI - Batter Content</p>`,
				batter: `<p class="mt-3 text-center">ODI Batter Content</p>`,
				bowler: `<p class="mt-3 text-center">ODI Bowler Content</p>`,
				alr: `<p class="mt-3 text-center">ODI All Rounder Content</p>`,
			},
			t20: {
				'test-batter': `<p class="mt-3 text-center">T20 - Batter Content</p>`,
				batter: `<p class="mt-3 text-center">T20 Batter Content</p>`,
				bowler: `<p class="mt-3 text-center">T20 Bowler Content</p>`,
				alr: `<p class="mt-3 text-center">T20 All Rounder Content</p>`,
			},
		};

		let currentTab = 'test';
		let currentSubTab = 'test-batter';

		function updateContent() {
			contentDiv.innerHTML = data[currentTab][currentSubTab];
		}

		tabButtons.forEach((btn) => {
			btn.addEventListener('click', function () {
				currentTab = this.dataset.tab;

				// Cập nhật class active cho tab chính
				tabButtons.forEach((b) => {
					b.classList.remove('active');
				});
				this.classList.add('active');

				updateContent();
			});
		});

		subTabButtons.forEach((btn) => {
			btn.addEventListener('click', function () {
				currentSubTab = this.dataset.subtab;

				// Cập nhật class active cho sub-tab
				subTabButtons.forEach((b) => {
					b.classList.remove('active');
				});
				this.classList.add('active');

				updateContent();
			});
		});

		updateContent();
	}

	window.onload = initTabs;
})();
