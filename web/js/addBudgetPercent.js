	//points disposed automaticly
	let pointsToDispose = 0;
	let i = 1;

	document.getElementById('pointsToDispose').innerHTML = pointsToDispose;

	document.getElementById('add_budget_percent_form_financeFreedom').value = 10;
	document.getElementById('add_budget_percent_form_moneyBoxFreedom').value = 5;
	document.getElementById('add_budget_percent_form_currentExpensesTransport').value = 10;
	document.getElementById('add_budget_percent_form_currentExpensesFood').value = 30;
	document.getElementById('add_budget_percent_form_currentExpensesHome').value = 10;
	document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value = 10;
	document.getElementById('add_budget_percent_form_pleasureAccount').value = 5;
	document.getElementById('add_budget_percent_form_educationAccount').value = 10;
	document.getElementById('add_budget_percent_form_helpOthersAccount').value = 10;

	//functions to dispose points by user
	function increasePointsToDispose() {
		
		pointsToDispose = pointsToDispose + 1;	
		document.getElementById('pointsToDispose').innerHTML = pointsToDispose;
		
	}

	function decreasePointsToDispose() {
		
		pointsToDispose = pointsToDispose - 1;	
		document.getElementById('pointsToDispose').innerHTML = pointsToDispose;
		
	}


	let financeFreedomPercentPlus = function () {
		
		let financeFreedom = document.getElementById('add_budget_percent_form_financeFreedom').value;
		if (pointsToDispose >= 1) {	
			financeFreedom++;
			document.getElementById('add_budget_percent_form_financeFreedom').value = financeFreedom;
			decreasePointsToDispose();
		}
		
	}

	let financeFreedomPercentMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_financeFreedom').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_financeFreedom').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_financeFreedom').value = financeFreedom;
			increasePointsToDispose();
		}  
		
	}

	let moneyBoxFreedomPercentPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_moneyBoxFreedom').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_moneyBoxFreedom').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let moneyBoxFreedomPercentMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_moneyBoxFreedom').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_moneyBoxFreedom').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_moneyBoxFreedom').value = financeFreedom;
			increasePointsToDispose();
		}  
		
	}
		
		
	let currentExpensesTransportPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesTransport').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_currentExpensesTransport').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let currentExpensesTransportMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_currentExpensesTransport').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesTransport').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_currentExpensesTransport').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}
			
		
	let currentExpensesFoodPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesFood').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_currentExpensesFood').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let currentExpensesFoodMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_currentExpensesFood').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesFood').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_currentExpensesFood').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}
		
			
	let currentExpensesHomePlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesHome').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_currentExpensesHome').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let currentExpensesHomeMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_currentExpensesHome').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesHome').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_currentExpensesHome').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}	
			
	let longTermForFutureExpensesPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let longTermForFutureExpensesMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}
			
	let pleasureAccountPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_pleasureAccount').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_pleasureAccount').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let pleasureAccountMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_pleasureAccount').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_pleasureAccount').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_pleasureAccount').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}

			
	let educationAccountPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_educationAccount').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_educationAccount').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let educationAccountMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_educationAccount').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_educationAccount').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_educationAccount').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}	
		
	let helpOthersAccountPlus = function () {
		let financeFreedom = document.getElementById('add_budget_percent_form_educationAccount').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_educationAccount').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	let helpOthersAccountMinus = function () {
		
		if (document.getElementById('add_budget_percent_form_helpOthersAccount').value >= 1) {		
			let financeFreedom = document.getElementById('add_budget_percent_form_helpOthersAccount').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_helpOthersAccount').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}