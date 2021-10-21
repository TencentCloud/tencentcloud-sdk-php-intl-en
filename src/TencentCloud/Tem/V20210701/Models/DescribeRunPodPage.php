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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version pod list
 *
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method integer getLimit() Obtain Number of records per page
 * @method void setLimit(integer $Limit) Set Number of records per page
 * @method integer getTotalCount() Obtain Total number of returned records
 * @method void setTotalCount(integer $TotalCount) Set Total number of returned records
 * @method string getRequestId() Obtain Request ID
 * @method void setRequestId(string $RequestId) Set Request ID
 * @method array getPodList() Obtain List of pods
 * @method void setPodList(array $PodList) Set List of pods
 */
class DescribeRunPodPage extends AbstractModel
{
    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @var integer Number of records per page
     */
    public $Limit;

    /**
     * @var integer Total number of returned records
     */
    public $TotalCount;

    /**
     * @var string Request ID
     */
    public $RequestId;

    /**
     * @var array List of pods
     */
    public $PodList;

    /**
     * @param integer $Offset Page offset
     * @param integer $Limit Number of records per page
     * @param integer $TotalCount Total number of returned records
     * @param string $RequestId Request ID
     * @param array $PodList List of pods
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = [];
            foreach ($param["PodList"] as $key => $value){
                $obj = new RunVersionPod();
                $obj->deserialize($value);
                array_push($this->PodList, $obj);
            }
        }
    }
}
