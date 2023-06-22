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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMigrationService request structure.
 *
 * @method string getSrcDatabaseType() Obtain Source database type. Valid values: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source database type. Valid values: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
 * @method string getDstDatabaseType() Obtain Target database type. Valid values: `mysql`, `redis`, `percona`, `mongodb` ,`postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Target database type. Valid values: `mysql`, `redis`, `percona`, `mongodb` ,`postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
 * @method string getSrcRegion() Obtain Source instance region, such as `ap-guangzhou`.
 * @method void setSrcRegion(string $SrcRegion) Set Source instance region, such as `ap-guangzhou`.
 * @method string getDstRegion() Obtain Target instance region, such as `ap-guangzhou`. Note that it must be the same as the API request region.
 * @method void setDstRegion(string $DstRegion) Set Target instance region, such as `ap-guangzhou`. Note that it must be the same as the API request region.
 * @method string getInstanceClass() Obtain Instance specification. Valid values: `small`, `medium`, `large`, `xlarge`, `2xlarge`.
 * @method void setInstanceClass(string $InstanceClass) Set Instance specification. Valid values: `small`, `medium`, `large`, `xlarge`, `2xlarge`.
 * @method integer getCount() Obtain Quantity. Value range: [1,15]. Default value: `1`.
 * @method void setCount(integer $Count) Set Quantity. Value range: [1,15]. Default value: `1`.
 * @method string getJobName() Obtain Migration task name, which can contain up to 128 characters.
 * @method void setJobName(string $JobName) Set Migration task name, which can contain up to 128 characters.
 * @method array getTags() Obtain Tag information
 * @method void setTags(array $Tags) Set Tag information
 */
class CreateMigrationServiceRequest extends AbstractModel
{
    /**
     * @var string Source database type. Valid values: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
     */
    public $SrcDatabaseType;

    /**
     * @var string Target database type. Valid values: `mysql`, `redis`, `percona`, `mongodb` ,`postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
     */
    public $DstDatabaseType;

    /**
     * @var string Source instance region, such as `ap-guangzhou`.
     */
    public $SrcRegion;

    /**
     * @var string Target instance region, such as `ap-guangzhou`. Note that it must be the same as the API request region.
     */
    public $DstRegion;

    /**
     * @var string Instance specification. Valid values: `small`, `medium`, `large`, `xlarge`, `2xlarge`.
     */
    public $InstanceClass;

    /**
     * @var integer Quantity. Value range: [1,15]. Default value: `1`.
     */
    public $Count;

    /**
     * @var string Migration task name, which can contain up to 128 characters.
     */
    public $JobName;

    /**
     * @var array Tag information
     */
    public $Tags;

    /**
     * @param string $SrcDatabaseType Source database type. Valid values: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
     * @param string $DstDatabaseType Target database type. Valid values: `mysql`, `redis`, `percona`, `mongodb` ,`postgresql`, `sqlserver`, `mariadb`, and `cynosdbmysql`.
     * @param string $SrcRegion Source instance region, such as `ap-guangzhou`.
     * @param string $DstRegion Target instance region, such as `ap-guangzhou`. Note that it must be the same as the API request region.
     * @param string $InstanceClass Instance specification. Valid values: `small`, `medium`, `large`, `xlarge`, `2xlarge`.
     * @param integer $Count Quantity. Value range: [1,15]. Default value: `1`.
     * @param string $JobName Migration task name, which can contain up to 128 characters.
     * @param array $Tags Tag information
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
        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
