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
 * DescribeClusterNodes response structure.
 *
 * @method integer getTotalCnt() Obtain Total number of queried nodes
 * @method void setTotalCnt(integer $TotalCnt) Set Total number of queried nodes
 * @method array getNodeList() Obtain List of node details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNodeList(array $NodeList) Set List of node details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTagKeys() Obtain List of tag keys owned by user
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagKeys(array $TagKeys) Set List of tag keys owned by user
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getHardwareResourceTypeList() Obtain Resource type list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHardwareResourceTypeList(array $HardwareResourceTypeList) Set Resource type list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClusterNodesResponse extends AbstractModel
{
    /**
     * @var integer Total number of queried nodes
     */
    public $TotalCnt;

    /**
     * @var array List of node details
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NodeList;

    /**
     * @var array List of tag keys owned by user
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagKeys;

    /**
     * @var array Resource type list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HardwareResourceTypeList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt Total number of queried nodes
     * @param array $NodeList List of node details
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TagKeys List of tag keys owned by user
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $HardwareResourceTypeList Resource type list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new NodeHardwareInfo();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("HardwareResourceTypeList",$param) and $param["HardwareResourceTypeList"] !== null) {
            $this->HardwareResourceTypeList = $param["HardwareResourceTypeList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
