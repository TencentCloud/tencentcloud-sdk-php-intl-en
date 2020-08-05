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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAbnormalEvent response structure.
 *
 * @method integer getTotal() Obtain Number of returned data entries.
 * @method void setTotal(integer $Total) Set Number of returned data entries.
 * @method array getAbnormalExperienceList() Obtain Exceptional experience list.
 * @method void setAbnormalExperienceList(array $AbnormalExperienceList) Set Exceptional experience list.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAbnormalEventResponse extends AbstractModel
{
    /**
     * @var integer Number of returned data entries.
     */
    public $Total;

    /**
     * @var array Exceptional experience list.
     */
    public $AbnormalExperienceList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Number of returned data entries.
     * @param array $AbnormalExperienceList Exceptional experience list.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AbnormalExperienceList",$param) and $param["AbnormalExperienceList"] !== null) {
            $this->AbnormalExperienceList = [];
            foreach ($param["AbnormalExperienceList"] as $key => $value){
                $obj = new AbnormalExperience();
                $obj->deserialize($value);
                array_push($this->AbnormalExperienceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
