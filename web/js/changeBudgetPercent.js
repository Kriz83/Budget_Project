$(document).ready(function(){

	//points disposed automaticly

	var pointsToDispose = 0;
	var i = 1;

	document.getElementById('pointsToDispose').innerHTML = pointsToDispose;

	//functions to dispose points by user
	function increasePointsToDispose() {
		
		pointsToDispose = pointsToDispose + 1;	
		document.getElementById('pointsToDispose').innerHTML = pointsToDispose;
		
	}

	function decreasePointsToDispose() {
		
		pointsToDispose = pointsToDispose - 1;	
		document.getElementById('pointsToDispose').innerHTML = pointsToDispose;
		
	}


	function financeFreedomPercentPlus() {
		
		var financeFreedom = document.getElementById('add_budget_percent_form_financeFreedom').value;
		if (pointsToDispose >= 1) {	
			financeFreedom++;
			document.getElementById('add_budget_percent_form_financeFreedom').value = financeFreedom;
			decreasePointsToDispose();
		}
		
	}

	function financeFreedomPercentMinus() {
		
		if (document.getElementById('add_budget_percent_form_financeFreedom').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_financeFreedom').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_financeFreedom').value = financeFreedom;
			increasePointsToDispose();
		}  
		
	}

	function moneyBoxFreedomPercentPlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_moneyBoxFreedom').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_moneyBoxFreedom').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function moneyBoxFreedomPercentMinus() {
		
		if (document.getElementById('add_budget_percent_form_moneyBoxFreedom').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_moneyBoxFreedom').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_moneyBoxFreedom').value = financeFreedom;
			increasePointsToDispose();
		}  
		
	}
		
		
	function currentExpensesTransportPlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesTransport').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_currentExpensesTransport').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function currentExpensesTransportMinus() {
		
		if (document.getElementById('add_budget_percent_form_currentExpensesTransport').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesTransport').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_currentExpensesTransport').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}
			
		
	function currentExpensesFoodPlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesFood').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_currentExpensesFood').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function currentExpensesFoodMinus() {
		
		if (document.getElementById('add_budget_percent_form_currentExpensesFood').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesFood').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_currentExpensesFood').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}
		
			
	function currentExpensesHomePlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesHome').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_currentExpensesHome').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function currentExpensesHomeMinus() {
		
		if (document.getElementById('add_budget_percent_form_currentExpensesHome').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_currentExpensesHome').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_currentExpensesHome').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}	
			
	function longTermForFutureExpensesPlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function longTermForFutureExpensesMinus() {
		
		if (document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_longTermForFutureExpenses').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}
			
	function pleasureAccountPlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_pleasureAccount').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_pleasureAccount').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function pleasureAccountMinus() {
		
		if (document.getElementById('add_budget_percent_form_pleasureAccount').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_pleasureAccount').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_pleasureAccount').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}

			
	function educationAccountPlus() {
		var financeFreedom = document.getElementById('add_budget_percent_form_educationAccount').value;
		if (pointsToDispose >= 1) {
			financeFreedom++;		
			document.getElementById('add_budget_percent_form_educationAccount').value = financeFreedom;
			decreasePointsToDispose();
		}
	}

	function educationAccountMinus() {
		
		if (document.getElementById('add_budget_percent_form_educationAccount').value >= 1) {		
			var financeFreedom = document.getElementById('add_budget_percent_form_educationAccount').value;
			financeFreedom--;
			document.getElementById('add_budget_percent_form_educationAccount').value = financeFreedom;
			increasePointsToDispose();
		}
		
	}

});