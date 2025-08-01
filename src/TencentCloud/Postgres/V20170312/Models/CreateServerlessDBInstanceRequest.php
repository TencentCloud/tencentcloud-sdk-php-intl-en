<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServerlessDBInstance request structure.
 *
 * @method string getZone() Obtain Availability zone ID. Only ap-shanghai-2, ap-beijing-1, and ap-guangzhou-2 are supported during the beta test.
 * @method void setZone(string $Zone) Set Availability zone ID. Only ap-shanghai-2, ap-beijing-1, and ap-guangzhou-2 are supported during the beta test.
 * @method string getDBInstanceName() Obtain Instance name. The value must be unique for the same account.
 * @method void setDBInstanceName(string $DBInstanceName) Set Instance name. The value must be unique for the same account.
 * @method string getDBVersion() Obtain Kernel version of a PostgreSQL instance. Currently, only 10.4 is supported.
 * @method void setDBVersion(string $DBVersion) Set Kernel version of a PostgreSQL instance. Currently, only 10.4 is supported.
 * @method string getDBCharset() Obtain Database character set of a PostgreSQL instance. Currently, only UTF-8 is supported.
 * @method void setDBCharset(string $DBCharset) Set Database character set of a PostgreSQL instance. Currently, only UTF-8 is supported.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getVpcId() Obtain VPC ID.
 * @method void setVpcId(string $VpcId) Set VPC ID.
 * @method string getSubnetId() Obtain VPC subnet ID.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID.
 * @method array getTagList() Obtain Array of tags to be bound with the instance
 * @method void setTagList(array $TagList) Set Array of tags to be bound with the instance
 */
class CreateServerlessDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Availability zone ID. Only ap-shanghai-2, ap-beijing-1, and ap-guangzhou-2 are supported during the beta test.
     */
    public $Zone;

    /**
     * @var string Instance name. The value must be unique for the same account.
     */
    public $DBInstanceName;

    /**
     * @var string Kernel version of a PostgreSQL instance. Currently, only 10.4 is supported.
     */
    public $DBVersion;

    /**
     * @var string Database character set of a PostgreSQL instance. Currently, only UTF-8 is supported.
     */
    public $DBCharset;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string VPC ID.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID.
     */
    public $SubnetId;

    /**
     * @var array Array of tags to be bound with the instance
     */
    public $TagList;

    /**
     * @param string $Zone Availability zone ID. Only ap-shanghai-2, ap-beijing-1, and ap-guangzhou-2 are supported during the beta test.
     * @param string $DBInstanceName Instance name. The value must be unique for the same account.
     * @param string $DBVersion Kernel version of a PostgreSQL instance. Currently, only 10.4 is supported.
     * @param string $DBCharset Database character set of a PostgreSQL instance. Currently, only UTF-8 is supported.
     * @param integer $ProjectId Project ID.
     * @param string $VpcId VPC ID.
     * @param string $SubnetId VPC subnet ID.
     * @param array $TagList Array of tags to be bound with the instance
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
