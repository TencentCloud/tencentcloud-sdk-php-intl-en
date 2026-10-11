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
 * DescribeClusterNodes request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID, such as emr-xxxxxxxx.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID, such as emr-xxxxxxxx.
 * @method string getNodeFlag() Obtain Node identifier. Valid values:
<li>all: indicates retrieving all types of nodes, except CDB information.</li>
<li>master: indicates retrieving Master node information.</li>
<li>core: indicates retrieving Core node information.</li>
<li>task: indicates retrieving Task node information.</li>
<li>common: indicates retrieving Common node information.</li>
<li>router: indicates retrieving Router node information.</li>
<li>db: indicates retrieving CDB information in the normal status.</li>
<li>recyle: indicates retrieving information of nodes isolated in the recycle bin, including CDB information.</li>
<li>renew: indicates retrieving information of all nodes pending renewal, including CDB information. Auto-renewed nodes will not be returned.</li>
Note: Only the values above are supported currently. Entering other values will result in an error.
 * @method void setNodeFlag(string $NodeFlag) Set Node identifier. Valid values:
<li>all: indicates retrieving all types of nodes, except CDB information.</li>
<li>master: indicates retrieving Master node information.</li>
<li>core: indicates retrieving Core node information.</li>
<li>task: indicates retrieving Task node information.</li>
<li>common: indicates retrieving Common node information.</li>
<li>router: indicates retrieving Router node information.</li>
<li>db: indicates retrieving CDB information in the normal status.</li>
<li>recyle: indicates retrieving information of nodes isolated in the recycle bin, including CDB information.</li>
<li>renew: indicates retrieving information of all nodes pending renewal, including CDB information. Auto-renewed nodes will not be returned.</li>
Note: Only the values above are supported currently. Entering other values will result in an error.
 * @method boolean getExportDb() Obtain Whether to carry CDB information when all node information is exported in CSV format.
 * @method void setExportDb(boolean $ExportDb) Set Whether to carry CDB information when all node information is exported in CSV format.
 * @method integer getOffset() Obtain Page number. The default value is 0, indicating the first page.
 * @method void setOffset(integer $Offset) Set Page number. The default value is 0, indicating the first page.
 * @method integer getLimit() Obtain Number of items returned per page. Default value: 100. Maximum value: 100.
If both offset and limit are not set, or both are set to 0, all data will be returned.
 * @method void setLimit(integer $Limit) Set Number of items returned per page. Default value: 100. Maximum value: 100.
If both offset and limit are not set, or both are set to 0, all data will be returned.
 * @method string getHardwareResourceType() Obtain Resource type. Valid values: all (default), host, and pod.
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Resource type. Valid values: all (default), host, and pod.
 * @method array getSearchFields() Obtain Searchable fields.
 * @method void setSearchFields(array $SearchFields) Set Searchable fields.
 * @method string getOrderField() Obtain Sorting field.
 * @method void setOrderField(string $OrderField) Set Sorting field.
 * @method integer getAsc() Obtain Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
 * @method void setAsc(integer $Asc) Set Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
 */
class DescribeClusterNodesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, such as emr-xxxxxxxx.
     */
    public $InstanceId;

    /**
     * @var string Node identifier. Valid values:
<li>all: indicates retrieving all types of nodes, except CDB information.</li>
<li>master: indicates retrieving Master node information.</li>
<li>core: indicates retrieving Core node information.</li>
<li>task: indicates retrieving Task node information.</li>
<li>common: indicates retrieving Common node information.</li>
<li>router: indicates retrieving Router node information.</li>
<li>db: indicates retrieving CDB information in the normal status.</li>
<li>recyle: indicates retrieving information of nodes isolated in the recycle bin, including CDB information.</li>
<li>renew: indicates retrieving information of all nodes pending renewal, including CDB information. Auto-renewed nodes will not be returned.</li>
Note: Only the values above are supported currently. Entering other values will result in an error.
     */
    public $NodeFlag;

    /**
     * @var boolean Whether to carry CDB information when all node information is exported in CSV format.
     */
    public $ExportDb;

    /**
     * @var integer Page number. The default value is 0, indicating the first page.
     */
    public $Offset;

    /**
     * @var integer Number of items returned per page. Default value: 100. Maximum value: 100.
If both offset and limit are not set, or both are set to 0, all data will be returned.
     */
    public $Limit;

    /**
     * @var string Resource type. Valid values: all (default), host, and pod.
     */
    public $HardwareResourceType;

    /**
     * @var array Searchable fields.
     */
    public $SearchFields;

    /**
     * @var string Sorting field.
     */
    public $OrderField;

    /**
     * @var integer Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
     */
    public $Asc;

    /**
     * @param string $InstanceId Cluster ID, such as emr-xxxxxxxx.
     * @param string $NodeFlag Node identifier. Valid values:
<li>all: indicates retrieving all types of nodes, except CDB information.</li>
<li>master: indicates retrieving Master node information.</li>
<li>core: indicates retrieving Core node information.</li>
<li>task: indicates retrieving Task node information.</li>
<li>common: indicates retrieving Common node information.</li>
<li>router: indicates retrieving Router node information.</li>
<li>db: indicates retrieving CDB information in the normal status.</li>
<li>recyle: indicates retrieving information of nodes isolated in the recycle bin, including CDB information.</li>
<li>renew: indicates retrieving information of all nodes pending renewal, including CDB information. Auto-renewed nodes will not be returned.</li>
Note: Only the values above are supported currently. Entering other values will result in an error.
     * @param boolean $ExportDb Whether to carry CDB information when all node information is exported in CSV format.
     * @param integer $Offset Page number. The default value is 0, indicating the first page.
     * @param integer $Limit Number of items returned per page. Default value: 100. Maximum value: 100.
If both offset and limit are not set, or both are set to 0, all data will be returned.
     * @param string $HardwareResourceType Resource type. Valid values: all (default), host, and pod.
     * @param array $SearchFields Searchable fields.
     * @param string $OrderField Sorting field.
     * @param integer $Asc Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
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

        if (array_key_exists("ExportDb",$param) and $param["ExportDb"] !== null) {
            $this->ExportDb = $param["ExportDb"];
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
