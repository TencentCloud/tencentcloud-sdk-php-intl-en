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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterNodes request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID in the format of emr-xxxxxxxx
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID in the format of emr-xxxxxxxx
 * @method string getNodeFlag() Obtain Node flag. Valid values:
<li>all: gets the information of nodes in all types except TencentDB information.</li>
<li>master: gets master node information.</li>
<li>core: gets core node information.</li>
<li>task: gets task node information.</li>
<li>common: gets common node information.</li>
<li>router: gets router node information.</li>
<li>db: gets TencentDB information in normal status.</li>
Note: only the above values are supported for the time being. Entering other values will cause errors.
 * @method void setNodeFlag(string $NodeFlag) Set Node flag. Valid values:
<li>all: gets the information of nodes in all types except TencentDB information.</li>
<li>master: gets master node information.</li>
<li>core: gets core node information.</li>
<li>task: gets task node information.</li>
<li>common: gets common node information.</li>
<li>router: gets router node information.</li>
<li>db: gets TencentDB information in normal status.</li>
Note: only the above values are supported for the time being. Entering other values will cause errors.
 * @method integer getOffset() Obtain Page number. Default value: 0, indicating the first page.
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0, indicating the first page.
 * @method integer getLimit() Obtain Number of returned results per page. Default value: 100. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of returned results per page. Default value: 100. Maximum value: 100
 * @method string getHardwareResourceType() Obtain Resource type. Valid values: all, host, pod. Default value: all
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Resource type. Valid values: all, host, pod. Default value: all
 * @method array getSearchFields() Obtain Searchable field
 * @method void setSearchFields(array $SearchFields) Set Searchable field
 * @method string getOrderField() Obtain None
 * @method void setOrderField(string $OrderField) Set None
 * @method integer getAsc() Obtain None
 * @method void setAsc(integer $Asc) Set None
 */
class DescribeClusterNodesRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID in the format of emr-xxxxxxxx
     */
    public $InstanceId;

    /**
     * @var string Node flag. Valid values:
<li>all: gets the information of nodes in all types except TencentDB information.</li>
<li>master: gets master node information.</li>
<li>core: gets core node information.</li>
<li>task: gets task node information.</li>
<li>common: gets common node information.</li>
<li>router: gets router node information.</li>
<li>db: gets TencentDB information in normal status.</li>
Note: only the above values are supported for the time being. Entering other values will cause errors.
     */
    public $NodeFlag;

    /**
     * @var integer Page number. Default value: 0, indicating the first page.
     */
    public $Offset;

    /**
     * @var integer Number of returned results per page. Default value: 100. Maximum value: 100
     */
    public $Limit;

    /**
     * @var string Resource type. Valid values: all, host, pod. Default value: all
     */
    public $HardwareResourceType;

    /**
     * @var array Searchable field
     */
    public $SearchFields;

    /**
     * @var string None
     */
    public $OrderField;

    /**
     * @var integer None
     */
    public $Asc;

    /**
     * @param string $InstanceId Cluster instance ID in the format of emr-xxxxxxxx
     * @param string $NodeFlag Node flag. Valid values:
<li>all: gets the information of nodes in all types except TencentDB information.</li>
<li>master: gets master node information.</li>
<li>core: gets core node information.</li>
<li>task: gets task node information.</li>
<li>common: gets common node information.</li>
<li>router: gets router node information.</li>
<li>db: gets TencentDB information in normal status.</li>
Note: only the above values are supported for the time being. Entering other values will cause errors.
     * @param integer $Offset Page number. Default value: 0, indicating the first page.
     * @param integer $Limit Number of returned results per page. Default value: 100. Maximum value: 100
     * @param string $HardwareResourceType Resource type. Valid values: all, host, pod. Default value: all
     * @param array $SearchFields Searchable field
     * @param string $OrderField None
     * @param integer $Asc None
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

        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("SearchFields",$param) and $param["SearchFields"] !== null) {
            $this->SearchFields = [];
            foreach ($param["SearchFields"] as $key => $value){
                $obj = new SearchItem();
                $obj->deserialize($value);
                array_push($this->SearchFields, $obj);
            }
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
