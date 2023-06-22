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
 * DescribeSlowLogs request structure.
 *
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getMd5() Obtain MD5 value of a SQL template
 * @method void setMd5(string $Md5) Set MD5 value of a SQL template
 * @method string getStartTime() Obtain Start time in the format of "2019-09-10 12:13:14".
 * @method void setStartTime(string $StartTime) Set Start time in the format of "2019-09-10 12:13:14".
 * @method string getEndTime() Obtain End time in the format of "2019-09-11 10:13:14". The interval between the end time and the start time can be up to 7 days.
 * @method void setEndTime(string $EndTime) Set End time in the format of "2019-09-11 10:13:14". The interval between the end time and the start time can be up to 7 days.
 * @method integer getOffset() Obtain The offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set The offset. Default value: `0`.
 * @method integer getLimit() Obtain The number of queried items. Default value: `20`. Max value: `100`.
 * @method void setLimit(integer $Limit) Set The number of queried items. Default value: `20`. Max value: `100`.
 * @method array getDB() Obtain Database list
 * @method void setDB(array $DB) Set Database list
 * @method array getKey() Obtain Keyword
 * @method void setKey(array $Key) Set Keyword
 * @method array getUser() Obtain User
 * @method void setUser(array $User) Set User
 * @method array getIp() Obtain IP
 * @method void setIp(array $Ip) Set IP
 * @method array getTime() Obtain Duration range. The left and right borders of the range are the zeroth and first element of the array, respectively.
 * @method void setTime(array $Time) Set Duration range. The left and right borders of the range are the zeroth and first element of the array, respectively.
 */
class DescribeSlowLogsRequest extends AbstractModel
{
    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     */
    public $Product;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string MD5 value of a SQL template
     */
    public $Md5;

    /**
     * @var string Start time in the format of "2019-09-10 12:13:14".
     */
    public $StartTime;

    /**
     * @var string End time in the format of "2019-09-11 10:13:14". The interval between the end time and the start time can be up to 7 days.
     */
    public $EndTime;

    /**
     * @var integer The offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer The number of queried items. Default value: `20`. Max value: `100`.
     */
    public $Limit;

    /**
     * @var array Database list
     */
    public $DB;

    /**
     * @var array Keyword
     */
    public $Key;

    /**
     * @var array User
     */
    public $User;

    /**
     * @var array IP
     */
    public $Ip;

    /**
     * @var array Duration range. The left and right borders of the range are the zeroth and first element of the array, respectively.
     */
    public $Time;

    /**
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     * @param string $InstanceId Instance ID
     * @param string $Md5 MD5 value of a SQL template
     * @param string $StartTime Start time in the format of "2019-09-10 12:13:14".
     * @param string $EndTime End time in the format of "2019-09-11 10:13:14". The interval between the end time and the start time can be up to 7 days.
     * @param integer $Offset The offset. Default value: `0`.
     * @param integer $Limit The number of queried items. Default value: `20`. Max value: `100`.
     * @param array $DB Database list
     * @param array $Key Keyword
     * @param array $User User
     * @param array $Ip IP
     * @param array $Time Duration range. The left and right borders of the range are the zeroth and first element of the array, respectively.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
