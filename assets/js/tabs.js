function pestanias(tabs,button,panel) {
  // JavaScript para controlar el comportamiento del menú de pestañas
  const tabsContainer = document.querySelector(`${tabs}`);
  if (tabsContainer == null) { return};
  const tabButtons = tabsContainer.querySelectorAll(`${button}`);
  const tabPanels = tabsContainer.querySelectorAll(`${panel}`);

  function handleTabClick(event) {
    const clickedTab = event.currentTarget;

    tabButtons.forEach(tabButton => tabButton.classList.remove('active'));
    clickedTab.classList.add('active');

    const clickedTabIndex = [...tabButtons].indexOf(clickedTab);

    tabPanels.forEach(tabPanel => tabPanel.classList.remove('active'));

    tabPanels[clickedTabIndex].classList.add('active');
  }

  tabButtons.forEach(tabButton => tabButton.addEventListener('click', handleTabClick));
}


pestanias('#tabs-Tresdias','#button-Tresdias','#panel-Tresdias');
pestanias('#tabs-TalleresdeDia','#button-TalleresdeDia','#panel-TalleresdeDia');
pestanias('#tabs-TalleresdeTarde','#button-TalleresdeTarde','#panel-TalleresdeTarde');
pestanias('#tabs-acciones','#button-acciones','#panel-acciones');