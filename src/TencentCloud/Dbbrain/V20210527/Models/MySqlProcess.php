<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relational database thread
 *
 * @method string getID() Obtain Thread ID.
 * @method void setID(string $ID) Set Thread ID.
 * @method string getUser() Obtain Thread operation account name.
 * @method void setUser(string $User) Set Thread operation account name.
 * @method string getHost() Obtain Thread operation host address.
 * @method void setHost(string $Host) Set Thread operation host address.
 * @method string getDB() Obtain Thread operation database.
 * @method void setDB(string $DB) Set Thread operation database.
 * @method string getState() Obtain Thread operation status.
 * @method void setState(string $State) Set Thread operation status.
 * @method string getCommand() Obtain Thread execution type.
 * @method void setCommand(string $Command) Set Thread execution type.
 * @method string getTime() Obtain Thread operation duration in seconds.
 * @method void setTime(string $Time) Set Thread operation duration in seconds.
 * @method string getInfo() Obtain Thread operation statement.
 * @method void setInfo(string $Info) Set Thread operation statement.
 */
class MySqlProcess extends AbstractModel
{
    /**
     * @var string Thread ID.
     */
    public $ID;

    /**
     * @var string Thread operation account name.
     */
    public $User;

    /**
     * @var string Thread operation host address.
     */
    public $Host;

    /**
     * @var string Thread operation database.
     */
    public $DB;

    /**
     * @var string Thread operation status.
     */
    public $State;

    /**
     * @var string Thread execution type.
     */
    public $Command;

    /**
     * @var string Thread operation duration in seconds.
     */
    public $Time;

    /**
     * @var string Thread operation statement.
     */
    public $Info;

    /**
     * @param string $ID Thread ID.
     * @param string $User Thread operation account name.
     * @param string $Host Thread operation host address.
     * @param string $DB Thread operation database.
     * @param string $State Thread operation status.
     * @param string $Command Thread execution type.
     * @param string $Time Thread operation duration in seconds.
     * @param string $Info Thread operation statement.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
