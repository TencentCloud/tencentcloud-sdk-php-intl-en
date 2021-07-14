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
 * DescribeMySqlProcessList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getID() Obtain Thread ID, which is used to filter the thread list.
 * @method void setID(integer $ID) Set Thread ID, which is used to filter the thread list.
 * @method string getUser() Obtain Thread operation account name, which is used to filter the thread list.
 * @method void setUser(string $User) Set Thread operation account name, which is used to filter the thread list.
 * @method string getHost() Obtain Thread operation host address, which is used to filter the thread list.
 * @method void setHost(string $Host) Set Thread operation host address, which is used to filter the thread list.
 * @method string getDB() Obtain Thread operation database, which is used to filter the thread list.
 * @method void setDB(string $DB) Set Thread operation database, which is used to filter the thread list.
 * @method string getState() Obtain Thread operation status, which is used to filter the thread list.
 * @method void setState(string $State) Set Thread operation status, which is used to filter the thread list.
 * @method string getCommand() Obtain Thread execution type, which is used to filter the thread list.
 * @method void setCommand(string $Command) Set Thread execution type, which is used to filter the thread list.
 * @method integer getTime() Obtain Minimum operation duration of the thread in seconds, which is used to filter the list of threads whose operation duration is greater than this value.
 * @method void setTime(integer $Time) Set Minimum operation duration of the thread in seconds, which is used to filter the list of threads whose operation duration is greater than this value.
 * @method string getInfo() Obtain Thread operation statement, which is used to filter the thread list.
 * @method void setInfo(string $Info) Set Thread operation statement, which is used to filter the thread list.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20.
 * @method string getProduct() Obtain Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
 * @method void setProduct(string $Product) Set Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
 */
class DescribeMySqlProcessListRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Thread ID, which is used to filter the thread list.
     */
    public $ID;

    /**
     * @var string Thread operation account name, which is used to filter the thread list.
     */
    public $User;

    /**
     * @var string Thread operation host address, which is used to filter the thread list.
     */
    public $Host;

    /**
     * @var string Thread operation database, which is used to filter the thread list.
     */
    public $DB;

    /**
     * @var string Thread operation status, which is used to filter the thread list.
     */
    public $State;

    /**
     * @var string Thread execution type, which is used to filter the thread list.
     */
    public $Command;

    /**
     * @var integer Minimum operation duration of the thread in seconds, which is used to filter the list of threads whose operation duration is greater than this value.
     */
    public $Time;

    /**
     * @var string Thread operation statement, which is used to filter the thread list.
     */
    public $Info;

    /**
     * @var integer Number of returned results. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
     */
    public $Product;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $ID Thread ID, which is used to filter the thread list.
     * @param string $User Thread operation account name, which is used to filter the thread list.
     * @param string $Host Thread operation host address, which is used to filter the thread list.
     * @param string $DB Thread operation database, which is used to filter the thread list.
     * @param string $State Thread operation status, which is used to filter the thread list.
     * @param string $Command Thread execution type, which is used to filter the thread list.
     * @param integer $Time Minimum operation duration of the thread in seconds, which is used to filter the list of threads whose operation duration is greater than this value.
     * @param string $Info Thread operation statement, which is used to filter the thread list.
     * @param integer $Limit Number of returned results. Default value: 20.
     * @param string $Product Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
