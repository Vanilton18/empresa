<?php
/** @package    Empresax::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * ClienteMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the ClienteDAO to the cliente datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Empresax::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class ClienteMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Id"] = new FieldMap("Id","cliente","id",true,FM_TYPE_INT,11,null,true);
			self::$FM["Nome"] = new FieldMap("Nome","cliente","nome",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Email"] = new FieldMap("Email","cliente","email",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Endereco"] = new FieldMap("Endereco","cliente","endereco",false,FM_TYPE_VARCHAR,150,null,false);
			self::$FM["Historico"] = new FieldMap("Historico","cliente","historico",false,FM_TYPE_LONGTEXT,null,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
			self::$KM["fk_recibo_paciente"] = new KeyMap("fk_recibo_paciente", "Id", "Recibo", "ClienteId", KM_TYPE_ONETOMANY, KM_LOAD_LAZY);  // use KM_LOAD_EAGER with caution here (one-to-one relationships only)
		}
		return self::$KM;
	}

}

?>