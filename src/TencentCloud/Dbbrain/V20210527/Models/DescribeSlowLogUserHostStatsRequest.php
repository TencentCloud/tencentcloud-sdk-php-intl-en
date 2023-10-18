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
 * DescribeSlowLogUserHostStats request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
 * @method void setStartTime(string $StartTime) Set Start time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
 * @method string getEndTime() Obtain End time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
 * @method void setEndTime(string $EndTime) Set End time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
 * @method string getProduct() Obtain Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
 * @method void setProduct(string $Product) Set Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
 * @method string getMd5() Obtain MD5 value of the SQL template
 * @method void setMd5(string $Md5) Set MD5 value of the SQL template
 */
class DescribeSlowLogUserHostStatsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
     */
    public $StartTime;

    /**
     * @var string End time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
     */
    public $EndTime;

    /**
     * @var string Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
     */
    public $Product;

    /**
     * @var string MD5 value of the SQL template
     */
    public $Md5;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Start time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
     * @param string $EndTime End time of the time range in the format of yyyy-MM-dd HH:mm:ss, such as 2019-09-10 12:13:14.
     * @param string $Product Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
     * @param string $Md5 MD5 value of the SQL template
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }
    }
}
