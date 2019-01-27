<div class="row">
	<div class="col-md-6">
		<form method="post" action="/Main/in">
		
			<h1> <font color="blue">Авторизация</font></h1>
				<div class="form-froup">
					<label class="font-weight-bold" for="Email">Email</label>
					<input type="Email" class="form-control" name="Email" aria-describdby="EmailHelp">
					<small name="Email" class="form-text text-muted">Введите адрес вашей электронной почты</small>
				</div>
				
				<div class="form-froup">
					<label class="font-weight-bold" for="Password">Пароль</label>
					<input type="Password" class="form-control" name="Password" aria-describdby="PasswordHelp">
					<small name="Password" class="form-text text-muted">Введите ваш пароль</small>
				</div>
				
			
				<button type="submit" class="btn btn-primary">Войти</button>
				
		</form>
		
	</div>



	<div class="col-md-6">
		 <form method="post" action="/Main/up">
		
			<h1> <font color="blue">Регистрация</font></h1>
			<div class="form-froup">
				<label class="font-weight-bold"  for="FirsName">Имя</label> 
				<label class="font-weight-bold text-danger" for="FirsName">*</label> 
				<input type="FirstName" class="form-control" id="FirstName" aria-describdby="FirsNameHelp">
				<small id="FirstName" class="form-text text-muted">Введите ваше имя</small>
			</div>
			
			<div class="form-froup">
				<label class="font-weight-bold" for="LastName">Фамилия</label>
				<label class="font-weight-bold text-danger" for="LastName">*</label> 
				<input type="LastName" class="form-control" id="LastName" aria-describdby="LastNameHelp">
				<small id="LastName" class="form-text text-muted">Введите вашу фамилию</small>
			</div>
			
			<div class="form-froup">
				<label class="font-weight-bold" for="Email">Email</label>
				<label class="font-weight-bold text-danger" for="Email">*</label> 
				<input type="Email" class="form-control" id="Email" aria-describdby="EmailHelp">
				<small id="Email" class="form-text text-muted">Введите адрес вашей электронной почты</small>
			</div>
		
			
			<div class="form-froup">
				<label class="font-weight-bold" for="Password">Пароль</label>
				<label class="font-weight-bold text-danger" for="Password">*</label> 
				<input type="Password" class="form-control" id="Password" aria-describdby="PasswordHelp">
				<small id="Password" class="form-text text-muted">Введите ваш апроль</small>
			</div>
			
			<div class="form-froup">
				<label class="font-weight-bold" for="Gender">Укажите ваш пол</label>
					  <select class="selectpicker" name="gender">
						  <option>не выбран</option>
						  <option>мужской</option>
						  <option>женский</option>
					  </select>
			</div>
			
			<div class="form-froup">
				<label class="font-weight-bold" for="BirthDate">Дата рождения</label>
				<input type="BirthDate" class="form-control" id="BirthDate" aria-describdby="BirthDateHelp">
				<small id="BirthDate" class="form-text text-muted">Формат даты рождения: год-месяц-число.</small><br>
			</div>
			
			<div class="form-froup">
				<p class="font-weight-bold text-danger">*
				<small  id="BirthDate" class="form-text text-muted">- обязательные поля для заполнения </small><br>
				</p>
			</div>
		
			<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
				
		</form>
	</div>
</div>