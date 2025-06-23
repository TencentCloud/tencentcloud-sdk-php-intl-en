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
 * Managed record detailed information.
 *
 * @method string getResourceType() Obtain Deployment resource type.
 * @method void setResourceType(string $ResourceType) Set Deployment resource type.
 * @method array getList() Obtain Deployment resource detail list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setList(array $List) Set Deployment resource detail list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total count of deployment resources.
 * @method void setTotalCount(integer $TotalCount) Set Total count of deployment resources.
 */
class DeployRecordList extends AbstractModel
{
    /**
     * @var string Deployment resource type.
     */
    public $ResourceType;

    /**
     * @var array Deployment resource detail list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $List;

    /**
     * @var integer Total count of deployment resources.
     */
    public $TotalCount;

    /**
     * @param string $ResourceType Deployment resource type.
     * @param array $List Deployment resource detail list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total count of deployment resources.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new DeployRecordItem();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
