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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of WAF instances - data structure of an async task for querying associated cloud resources
 *
 * @method string getRegion() Obtain The region.
 * @method void setRegion(string $Region) Set The region.
 * @method array getInstanceList() Obtain The list of WAF instances.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceList(array $InstanceList) Set The list of WAF instances.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain The total number of WAF instances in this region.	
 * @method void setTotalCount(integer $TotalCount) Set The total number of WAF instances in this region.	
 * @method string getError() Obtain Whether to query exceptions.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setError(string $Error) Set Whether to query exceptions.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class WafInstanceList extends AbstractModel
{
    /**
     * @var string The region.
     */
    public $Region;

    /**
     * @var array The list of WAF instances.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceList;

    /**
     * @var integer The total number of WAF instances in this region.	
     */
    public $TotalCount;

    /**
     * @var string Whether to query exceptions.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @param string $Region The region.
     * @param array $InstanceList The list of WAF instances.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount The total number of WAF instances in this region.	
     * @param string $Error Whether to query exceptions.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new WafInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
