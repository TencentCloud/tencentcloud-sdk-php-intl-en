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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceNodeInfos request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getOffset() Obtain Page number.
 * @method void setOffset(integer $Offset) Set Page number.
 * @method integer getLimit() Obtain Page size.
 * @method void setLimit(integer $Limit) Set Page size.
 * @method string getSearchText() Obtain Searching fields.
 * @method void setSearchText(string $SearchText) Set Searching fields.
 * @method integer getConfStatus() Obtain Configuration status. -2: configuration failed; -1: configuration expired; 1: synchronized; -99: all.
 * @method void setConfStatus(integer $ConfStatus) Set Configuration status. -2: configuration failed; -1: configuration expired; 1: synchronized; -99: all.
 * @method integer getMaintainStateId() Obtain Filter criteria: Maintenance status

0 indicates all statuses.
1 indicates normal.
2 indicates the maintenance status.

 * @method void setMaintainStateId(integer $MaintainStateId) Set Filter criteria: Maintenance status

0 indicates all statuses.
1 indicates normal.
2 indicates the maintenance status.

 * @method integer getOperatorStateId() Obtain Filter criteria: Operation status

0 indicates all statuses.
1 indicates started.
2 indicates stopped.
 * @method void setOperatorStateId(integer $OperatorStateId) Set Filter criteria: Operation status

0 indicates all statuses.
1 indicates started.
2 indicates stopped.
 * @method string getHealthStateId() Obtain Filter criteria: health status.
0 indicates unavailable.
1 indicates good.
-2 indicates unknown.
-99 indicates all.
-3 indicates potential risks.
-4 indicates undetected.
 * @method void setHealthStateId(string $HealthStateId) Set Filter criteria: health status.
0 indicates unavailable.
1 indicates good.
-2 indicates unknown.
-99 indicates all.
-3 indicates potential risks.
-4 indicates undetected.
 * @method string getServiceName() Obtain Service component names (in all caps, for example, YARN).
 * @method void setServiceName(string $ServiceName) Set Service component names (in all caps, for example, YARN).
 * @method string getNodeTypeName() Obtain Node names: master, core, task, common, and router.
 * @method void setNodeTypeName(string $NodeTypeName) Set Node names: master, core, task, common, and router.
 * @method integer getDataNodeMaintenanceId() Obtain Filter criteria: whether DN is in the maintenance status.
0 indicates all statuses.
1 indicates the maintenance status.
 * @method void setDataNodeMaintenanceId(integer $DataNodeMaintenanceId) Set Filter criteria: whether DN is in the maintenance status.
0 indicates all statuses.
1 indicates the maintenance status.
 * @method array getSearchFields() Obtain Searchable fields (currently supported SearchType: ipv4).
 * @method void setSearchFields(array $SearchFields) Set Searchable fields (currently supported SearchType: ipv4).
 */
class DescribeServiceNodeInfosRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Page number.
     */
    public $Offset;

    /**
     * @var integer Page size.
     */
    public $Limit;

    /**
     * @var string Searching fields.
     */
    public $SearchText;

    /**
     * @var integer Configuration status. -2: configuration failed; -1: configuration expired; 1: synchronized; -99: all.
     */
    public $ConfStatus;

    /**
     * @var integer Filter criteria: Maintenance status

0 indicates all statuses.
1 indicates normal.
2 indicates the maintenance status.

     */
    public $MaintainStateId;

    /**
     * @var integer Filter criteria: Operation status

0 indicates all statuses.
1 indicates started.
2 indicates stopped.
     */
    public $OperatorStateId;

    /**
     * @var string Filter criteria: health status.
0 indicates unavailable.
1 indicates good.
-2 indicates unknown.
-99 indicates all.
-3 indicates potential risks.
-4 indicates undetected.
     */
    public $HealthStateId;

    /**
     * @var string Service component names (in all caps, for example, YARN).
     */
    public $ServiceName;

    /**
     * @var string Node names: master, core, task, common, and router.
     */
    public $NodeTypeName;

    /**
     * @var integer Filter criteria: whether DN is in the maintenance status.
0 indicates all statuses.
1 indicates the maintenance status.
     */
    public $DataNodeMaintenanceId;

    /**
     * @var array Searchable fields (currently supported SearchType: ipv4).
     */
    public $SearchFields;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Offset Page number.
     * @param integer $Limit Page size.
     * @param string $SearchText Searching fields.
     * @param integer $ConfStatus Configuration status. -2: configuration failed; -1: configuration expired; 1: synchronized; -99: all.
     * @param integer $MaintainStateId Filter criteria: Maintenance status

0 indicates all statuses.
1 indicates normal.
2 indicates the maintenance status.

     * @param integer $OperatorStateId Filter criteria: Operation status

0 indicates all statuses.
1 indicates started.
2 indicates stopped.
     * @param string $HealthStateId Filter criteria: health status.
0 indicates unavailable.
1 indicates good.
-2 indicates unknown.
-99 indicates all.
-3 indicates potential risks.
-4 indicates undetected.
     * @param string $ServiceName Service component names (in all caps, for example, YARN).
     * @param string $NodeTypeName Node names: master, core, task, common, and router.
     * @param integer $DataNodeMaintenanceId Filter criteria: whether DN is in the maintenance status.
0 indicates all statuses.
1 indicates the maintenance status.
     * @param array $SearchFields Searchable fields (currently supported SearchType: ipv4).
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchText",$param) and $param["SearchText"] !== null) {
            $this->SearchText = $param["SearchText"];
        }

        if (array_key_exists("ConfStatus",$param) and $param["ConfStatus"] !== null) {
            $this->ConfStatus = $param["ConfStatus"];
        }

        if (array_key_exists("MaintainStateId",$param) and $param["MaintainStateId"] !== null) {
            $this->MaintainStateId = $param["MaintainStateId"];
        }

        if (array_key_exists("OperatorStateId",$param) and $param["OperatorStateId"] !== null) {
            $this->OperatorStateId = $param["OperatorStateId"];
        }

        if (array_key_exists("HealthStateId",$param) and $param["HealthStateId"] !== null) {
            $this->HealthStateId = $param["HealthStateId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("NodeTypeName",$param) and $param["NodeTypeName"] !== null) {
            $this->NodeTypeName = $param["NodeTypeName"];
        }

        if (array_key_exists("DataNodeMaintenanceId",$param) and $param["DataNodeMaintenanceId"] !== null) {
            $this->DataNodeMaintenanceId = $param["DataNodeMaintenanceId"];
        }

        if (array_key_exists("SearchFields",$param) and $param["SearchFields"] !== null) {
            $this->SearchFields = [];
            foreach ($param["SearchFields"] as $key => $value){
                $obj = new SearchItem();
                $obj->deserialize($value);
                array_push($this->SearchFields, $obj);
            }
        }
    }
}
