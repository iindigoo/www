<?php

class TicketsModel
{
	public static function getTickets()
	{
		$database = DatabaseFactory::getFactory()->getConnection();
        
        $query = $database->prepare("SELECT ticket_amount, ticket_last_update_timestamp FROM tickets WHERE user_id = :user_id");
        $query->execute(array(':user_id' => Session::get('user_id')));

        $result =  $query->fetch();
        $tickets = $result->ticket_amount;

        return $tickets;
	}
    
    public static function addTickets($addtickets = 0) {

		$database = DatabaseFactory::getFactory()->getConnection();
        
        $query = $database->prepare("SELECT ticket_amount, ticket_last_update_timestamp FROM tickets WHERE user_id = :user_id");
        $query->execute(array(':user_id' => Session::get('user_id')));
        
        $result = $query->fetch();

        if (time() - $result->ticket_last_update_timestamp < 5) {
        	return false;
        }

        $tickets = $result->ticket_amount;
        $tickets += $addtickets;
        $timenow = time();

        $query = $database->prepare("UPDATE tickets SET ticket_amount =:ticketamount, ticket_last_update_timestamp = :timenow WHERE user_id=:user_id");
        $query->execute(array(':user_id' => Session::get('user_id'), ':ticketamount' => $tickets, ':timenow' => $timenow));
        
        return $tickets;
    }
}