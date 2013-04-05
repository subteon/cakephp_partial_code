<?php

	//404
	throw new NotFoundException();


	//view path
	//app/View/Errors/error400.ctp

	//http://book.cakephp.org/2.0/en/development/exceptions.html#built-in-exceptions-for-cakephp

	//400 Bad Request error.
	throw new BadRequestException();

	//403 Forbidden error.
	throw new ForbiddenException();

	//404 Not found error.
	throw new NotFoundException();

	//405 Method Not Allowed error.
	throw new MethodNotAllowedException();

	//500 Internal Server Error.
	throw new InternalErrorException();

	//501 Not Implemented Errors.
	throw new NotImplementedException();


	//The chosen view file could not be found.
	throw new MissingViewException();

	//The chosen layout could not be found.
	throw new MissingLayoutException();

	//A helper was not found.
	throw new MissingHelperException();

	//A configured behavior could not be found.
	throw new MissingBehaviorException();

	//A configured component could not be found.
	throw new MissingComponentException();

	//A configured task was not found.
	throw new MissingTaskException();

	//The shell class could not be found.
	throw new MissingShellException();

	//The chosen shell class has no method of that name.
	throw new MissingShellMethodException();

	//The configured database is missing.
	throw new MissingDatabaseException();

	//A modelfs connection is missing.
	throw new MissingConnectionException();

	//A modelfs table is missing.
	throw new MissingTableException();

	//The requested controller action could not be found.
	throw new MissingActionException();

	//The requested controller could not be found.
	throw new MissingControllerException();

	//Private action access. Either accessing private/protected/_ prefixed actions, or trying to access prefixed routes incorrectly.
	throw new PrivateActionException();

?>
