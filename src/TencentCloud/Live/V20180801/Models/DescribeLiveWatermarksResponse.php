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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveWatermarks response structure.
 *
 * @method integer getTotalNum() Obtain Total number of watermarks.
 * @method void setTotalNum(integer $TotalNum) Set Total number of watermarks.
 * @method array getWatermarkList() Obtain Watermark information list.
 * @method void setWatermarkList(array $WatermarkList) Set Watermark information list.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLiveWatermarksResponse extends AbstractModel
{
    /**
     * @var integer Total number of watermarks.
     */
    public $TotalNum;

    /**
     * @var array Watermark information list.
     */
    public $WatermarkList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalNum Total number of watermarks.
     * @param array $WatermarkList Watermark information list.
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("WatermarkList",$param) and $param["WatermarkList"] !== null) {
            $this->WatermarkList = [];
            foreach ($param["WatermarkList"] as $key => $value){
                $obj = new WatermarkInfo();
                $obj->deserialize($value);
                array_push($this->WatermarkList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
