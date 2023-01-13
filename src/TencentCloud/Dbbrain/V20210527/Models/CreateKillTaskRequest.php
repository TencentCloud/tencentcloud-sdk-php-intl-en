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
 * CreateKillTask request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance associated with the session killing task.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance associated with the session killing task.
 * @method integer getDuration() Obtain Task duration in seconds. Pass in `-1` to stop the task manually.
 * @method void setDuration(integer $Duration) Set Task duration in seconds. Pass in `-1` to stop the task manually.
 * @method string getHost() Obtain Client IP, which is a task filter.
 * @method void setHost(string $Host) Set Client IP, which is a task filter.
 * @method string getDB() Obtain Database name, which is a task filter. Multiple database names are separated by comma.
 * @method void setDB(string $DB) Set Database name, which is a task filter. Multiple database names are separated by comma.
 * @method string getCommand() Obtain Related command, which is a task filter. Multiple commands are separated by comma.
 * @method void setCommand(string $Command) Set Related command, which is a task filter. Multiple commands are separated by comma.
 * @method string getInfo() Obtain Task filter. Filtering by single filter prefix is supported.
 * @method void setInfo(string $Info) Set Task filter. Filtering by single filter prefix is supported.
 * @method string getUser() Obtain User type, which is a task filter.
 * @method void setUser(string $User) Set User type, which is a task filter.
 * @method integer getTime() Obtain Session duration in seconds, which is a task filter.
 * @method void setTime(integer $Time) Set Session duration in seconds, which is a task filter.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 */
class CreateKillTaskRequest extends AbstractModel
{
    /**
     * @var string ID of the instance associated with the session killing task.
     */
    public $InstanceId;

    /**
     * @var integer Task duration in seconds. Pass in `-1` to stop the task manually.
     */
    public $Duration;

    /**
     * @var string Client IP, which is a task filter.
     */
    public $Host;

    /**
     * @var string Database name, which is a task filter. Multiple database names are separated by comma.
     */
    public $DB;

    /**
     * @var string Related command, which is a task filter. Multiple commands are separated by comma.
     */
    public $Command;

    /**
     * @var string Task filter. Filtering by single filter prefix is supported.
     */
    public $Info;

    /**
     * @var string User type, which is a task filter.
     */
    public $User;

    /**
     * @var integer Session duration in seconds, which is a task filter.
     */
    public $Time;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     */
    public $Product;

    /**
     * @param string $InstanceId ID of the instance associated with the session killing task.
     * @param integer $Duration Task duration in seconds. Pass in `-1` to stop the task manually.
     * @param string $Host Client IP, which is a task filter.
     * @param string $DB Database name, which is a task filter. Multiple database names are separated by comma.
     * @param string $Command Related command, which is a task filter. Multiple commands are separated by comma.
     * @param string $Info Task filter. Filtering by single filter prefix is supported.
     * @param string $User User type, which is a task filter.
     * @param integer $Time Session duration in seconds, which is a task filter.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
