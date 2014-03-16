<?
$MESSAGE=array(
	'admin_access'=>'Недоступно, небходимы права админа',
	'user_access'=>'Недоступно, необходима авторизация. <a class="new" href="login.php">Войдите на сайт</a> или <a class="new" href="registry.php">зарегистрируйтесь</a>',
	'team_leader_access'=>'Не хватает прав лидера команды',
	'team_not_found'=>'Такой команды нет',
	'bug'=>'Упс, ошибочка вышла',
	'action_not_found'=>'А что это за действие?',
	'contest_not_found'=>'Такого конкурса нет',
	'user_not_found'=>'Такого пользователя нет',
);
$VALIDATOR=array(
	'user_name'=>'/^(?![ \@])[\wа-яё \@\-]+(?<! )$/ui',
	'team_name'=>'/^(?! )[\wа-яё \@\'\-\=\^]+(?<! )$/ui',
	'contest_name'=>'/^(?! )[\wа-яё \@\'\-\=\^]+(?<! )$/ui',
	'date'=>'/^\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2}$/ui'
);
$INVALID=array(
	'user_name'=>array(
		'type'=>'Ошибка ввода',
		'имя пользователя'=>'может состоять только из букв цифр и пробела, но пробел не должен быть ни в начале ни в конце'
	),
	'team_name'=>array(
		'type'=>'Ошибка ввода',
		'имя команды'=>'должно состоять из букв цифр символов @\'-=^ и пробела, но пробел не должен быть ни в начале ни в конце'
	),
	'contest_name'=>array(
		'type'=>'Ошибка ввода',
		'(contest_name)имя конкурса'=>'должно состоять из букв цифр символов @\'-=^ и пробела, но пробел не должен быть ни в начале ни в конце'
	),
	'user_passw'=>array(
		'type'=>'Ошибка ввода',
		'пароль пользователя'=>'должен быть не менее чем из 6 символов'
	),
	'user_time_zone'=>array(
		'type'=>'Ошибка ввода',
		'часовой пояс'=>'должен быть введённ'
	),
	'login_error'=>array(
		'type'=>'Нет доступа',
		'логин и пароль'=>'вы не зашли на сайт'
	),
	'id_user'=>array(
		'type'=>'Ошибка ввода',
		'пользователь'=>'должен быть числом'
	),
	'id_member'=>array(
		'type'=>'Ошибка ввода',
		'код участника'=>'должен быть числом'
	),
	'id_team'=>array(
		'type'=>'Ошибка ввода',
		'код команды'=>'должен быть числом'
	),
	'id_contest'=>array(
		'type'=>'Ошибка ввода',
		'код конкурса'=>'должен быть числом'
	),
	'id_participation'=>array(
		'type'=>'Ошибка ввода',
		'код конкурсанта'=>'должен быть числом'
	),
	'team_desc'=>array(
		'type'=>'Ошибка ввода',
		'описание команды'=>'должно быть установленно'
	),
	'response_to_invite'=>array(
		'type'=>'Ошибка ввода',
		'ответ на приглашение'=>'должен быть (accept)принят или (decline)отклонён'
	),
	'date'=>array(
		'type'=>'Ошибка ввода',
		'дата'=>'должна быть в формате YYYY-MM-DD HH:MM:SS'
	),
	'bool'=>array(
		'type'=>'Ошибка ввода',
		'флажок'=>'должен принимать одно из 2-х значений: 0 или 1'
	),
	'contest_state'=>array(
		'type'=>'Ошибка ввода',
		'состояние конкурса'=>'должно быть (nominate)номинант, (open)открыт, (wait)ожидание работ, (vote)голосование или (close)закрыт'
	),
	'bad_vote'=>array(
		'type'=>'Ошибка ввода',
		'левый голос'=>"такого участника нет в конкурсе"
	),
	'bad_score'=>array(
		'type'=>'Ошибка ввода',
		'балл вне интервала'=>'недопустимое значение балла'
	),
	'duplicate_vote'=>array(
		'type'=>'Ошибка ввода',
		'дубликат голоса'=>'лишний голос при голосовании'
	),
	'duplicate_score'=>array(
		'type'=>'Ошибка ввода',
		'дубликат баллов'=>'лишний балл при голосовании'
	),
	'need_vote'=>array(
		'type'=>'Ошибка ввода',
		'нехватает голоса'=>'пропушен голос при голосовании'
	),
	'need_score'=>array(
		'type'=>'Ошибка ввода',
		'нехватает балла'=>'участнику должен быть выставленн балл'
	),
	'need_comment'=>array('
		type'=>'Ошибка ввода',
		'нехватает коментария'=>'пропушен комментарий при голосовании'
	),
	'array_participation'=>array(
		'type'=>'Ошибка ввода',
		'массив конкурсантов'=>'должен быть массивом из кодов конкурсантов'		
	),
	'array_score'=>array(
		'type'=>'Ошибка ввода',
		'массив баллов'=>'должен быть массивом из чисел'
	),
	'array_comments'=>array(
		'type'=>'Ошибка ввода',
		'массив комментариев'=>'должен быть массивом из строк'
	),
	'work'=>array(
		'type'=>'Ошибка ввода',
		'работа'=>'должна быть строковым индексом $_FILES массива'
	),
	'work_error'=>array(
		'type'=>'Ошибка загрузки',
		'работа не загружена'=>'Проверьте отправку работы'
	),
	'work_acces_forbidden'=>array(
		'type'=>'Нет доступа',
		'нет доступа для отправки работы'=>'У вас не хватает прав. Возможно работа отправляется повторно'
	),
	'unknown_action'=>array(
		'type'=>'Ошибочное использование'
	)
);
?>