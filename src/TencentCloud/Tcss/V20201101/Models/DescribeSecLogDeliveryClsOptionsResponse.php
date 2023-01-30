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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogDeliveryClsOptions response structure.
 *
 * @method array getLogSetList() Obtain List of optional CLS logsets, which is returned only when `ClsRegion` is not empty.
 * @method void setLogSetList(array $LogSetList) Set List of optional CLS logsets, which is returned only when `ClsRegion` is not empty.
 * @method array getRegionList() Obtain List of optional regions, which is returned only when `ClsRegion` is empty.
 * @method void setRegionList(array $RegionList) Set List of optional regions, which is returned only when `ClsRegion` is empty.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecLogDeliveryClsOptionsResponse extends AbstractModel
{
    /**
     * @var array List of optional CLS logsets, which is returned only when `ClsRegion` is not empty.
     */
    public $LogSetList;

    /**
     * @var array List of optional regions, which is returned only when `ClsRegion` is empty.
     */
    public $RegionList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $LogSetList List of optional CLS logsets, which is returned only when `ClsRegion` is not empty.
     * @param array $RegionList List of optional regions, which is returned only when `ClsRegion` is empty.
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
        if (array_key_exists("LogSetList",$param) and $param["LogSetList"] !== null) {
            $this->LogSetList = [];
            foreach ($param["LogSetList"] as $key => $value){
                $obj = new ClsLogsetInfo();
                $obj->deserialize($value);
                array_push($this->LogSetList, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
