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
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method string getSearchText() Obtain Searching field.
 * @method void setSearchText(string $SearchText) Set Searching field.
 * @method integer getConfStatus() Obtain 'Configuration status. Valid values: -2 (configuration failed), -1 (configuration expired), 1 (synchronized)', and -99 '(all)'.
 * @method void setConfStatus(integer $ConfStatus) Set 'Configuration status. Valid values: -2 (configuration failed), -1 (configuration expired), 1 (synchronized)', and -99 '(all)'.
 * @method integer getMaintainStateId() Obtain Filter criterion, which specifies the maintenance status. Valid values:
0: all statuses
1: normal mode
2: maintenance mode

 * @method void setMaintainStateId(integer $MaintainStateId) Set Filter criterion, which specifies the maintenance status. Valid values:
0: all statuses
1: normal mode
2: maintenance mode

 * @method integer getOperatorStateId() Obtain Filter criterion, which specifies the operation status. Valid values:
0: all statuses
1: started
2: stopped.
 * @method void setOperatorStateId(integer $OperatorStateId) Set Filter criterion, which specifies the operation status. Valid values:
0: all statuses
1: started
2: stopped.
 * @method string getHealthStateId() Obtain Filter criterion, which specifies the health status. Valid values:
"0": unavailable
"1": good
-2: unknown
-99: all statuses
-3: potential risk
-4: undetected
 * @method void setHealthStateId(string $HealthStateId) Set Filter criterion, which specifies the health status. Valid values:
"0": unavailable
"1": good
-2: unknown
-99: all statuses
-3: potential risk
-4: undetected
 * @method string getServiceName() Obtain Service component name, which must be specified by using uppercase letters (for example, YARN). Select either the service component name or ServiceGroupType in an API call and ensure that the selected item is required.
 * @method void setServiceName(string $ServiceName) Set Service component name, which must be specified by using uppercase letters (for example, YARN). Select either the service component name or ServiceGroupType in an API call and ensure that the selected item is required.
 * @method string getNodeTypeName() Obtain Node name. Valid values: master, core, task, common, and router.
 * @method void setNodeTypeName(string $NodeTypeName) Set Node name. Valid values: master, core, task, common, and router.
 * @method integer getDataNodeMaintenanceId() Obtain Filter criterion, which specifies whether the data node is in maintenance. Valid values:
0: all statuses
1: maintenance status
 * @method void setDataNodeMaintenanceId(integer $DataNodeMaintenanceId) Set Filter criterion, which specifies whether the data node is in maintenance. Valid values:
0: all statuses
1: maintenance status
 * @method array getSearchFields() Obtain Searchable fields (Currently, SearchType: ipv4 is supported).
 * @method void setSearchFields(array $SearchFields) Set Searchable fields (Currently, SearchType: ipv4 is supported).
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
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var string Searching field.
     */
    public $SearchText;

    /**
     * @var integer 'Configuration status. Valid values: -2 (configuration failed), -1 (configuration expired), 1 (synchronized)', and -99 '(all)'.
     */
    public $ConfStatus;

    /**
     * @var integer Filter criterion, which specifies the maintenance status. Valid values:
0: all statuses
1: normal mode
2: maintenance mode

     */
    public $MaintainStateId;

    /**
     * @var integer Filter criterion, which specifies the operation status. Valid values:
0: all statuses
1: started
2: stopped.
     */
    public $OperatorStateId;

    /**
     * @var string Filter criterion, which specifies the health status. Valid values:
"0": unavailable
"1": good
-2: unknown
-99: all statuses
-3: potential risk
-4: undetected
     */
    public $HealthStateId;

    /**
     * @var string Service component name, which must be specified by using uppercase letters (for example, YARN). Select either the service component name or ServiceGroupType in an API call and ensure that the selected item is required.
     */
    public $ServiceName;

    /**
     * @var string Node name. Valid values: master, core, task, common, and router.
     */
    public $NodeTypeName;

    /**
     * @var integer Filter criterion, which specifies whether the data node is in maintenance. Valid values:
0: all statuses
1: maintenance status
     */
    public $DataNodeMaintenanceId;

    /**
     * @var array Searchable fields (Currently, SearchType: ipv4 is supported).
     */
    public $SearchFields;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Offset Page number.
     * @param integer $Limit Number of entries per page.
     * @param string $SearchText Searching field.
     * @param integer $ConfStatus 'Configuration status. Valid values: -2 (configuration failed), -1 (configuration expired), 1 (synchronized)', and -99 '(all)'.
     * @param integer $MaintainStateId Filter criterion, which specifies the maintenance status. Valid values:
0: all statuses
1: normal mode
2: maintenance mode

     * @param integer $OperatorStateId Filter criterion, which specifies the operation status. Valid values:
0: all statuses
1: started
2: stopped.
     * @param string $HealthStateId Filter criterion, which specifies the health status. Valid values:
"0": unavailable
"1": good
-2: unknown
-99: all statuses
-3: potential risk
-4: undetected
     * @param string $ServiceName Service component name, which must be specified by using uppercase letters (for example, YARN). Select either the service component name or ServiceGroupType in an API call and ensure that the selected item is required.
     * @param string $NodeTypeName Node name. Valid values: master, core, task, common, and router.
     * @param integer $DataNodeMaintenanceId Filter criterion, which specifies whether the data node is in maintenance. Valid values:
0: all statuses
1: maintenance status
     * @param array $SearchFields Searchable fields (Currently, SearchType: ipv4 is supported).
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
