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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordLineList response structure.
 *
 * @method array getLineList() Obtain List of split zones.
 * @method void setLineList(array $LineList) Set List of split zones.
 * @method array getLineGroupList() Obtain List of split zone groups.
 * @method void setLineGroupList(array $LineGroupList) Set List of split zone groups.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRecordLineListResponse extends AbstractModel
{
    /**
     * @var array List of split zones.
     */
    public $LineList;

    /**
     * @var array List of split zone groups.
     */
    public $LineGroupList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $LineList List of split zones.
     * @param array $LineGroupList List of split zone groups.
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
        if (array_key_exists("LineList",$param) and $param["LineList"] !== null) {
            $this->LineList = [];
            foreach ($param["LineList"] as $key => $value){
                $obj = new LineInfo();
                $obj->deserialize($value);
                array_push($this->LineList, $obj);
            }
        }

        if (array_key_exists("LineGroupList",$param) and $param["LineGroupList"] !== null) {
            $this->LineGroupList = [];
            foreach ($param["LineGroupList"] as $key => $value){
                $obj = new LineGroupInfo();
                $obj->deserialize($value);
                array_push($this->LineGroupList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
