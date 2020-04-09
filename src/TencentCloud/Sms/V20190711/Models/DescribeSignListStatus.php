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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for getting SMS signature information
 *
 * @method integer getSignId() Obtain Signature ID
 * @method void setSignId(integer $SignId) Set Signature ID
 * @method integer getInternational() Obtain Whether it is Global SMS. Valid values:
0: Mainland China SMS.
1: Global SMS
 * @method void setInternational(integer $International) Set Whether it is Global SMS. Valid values:
0: Mainland China SMS.
1: Global SMS
 * @method integer getStatusCode() Obtain Signature application status. Valid values:
0: approved.
-1: rejected or failed.
 * @method void setStatusCode(integer $StatusCode) Set Signature application status. Valid values:
0: approved.
-1: rejected or failed.
 * @method string getReviewReply() Obtain Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
 * @method void setReviewReply(string $ReviewReply) Set Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
 * @method string getSignName() Obtain Signature name.
 * @method void setSignName(string $SignName) Set Signature name.
 * @method integer getCreateTime() Obtain Application submission time in the format of UNIX timestamp in seconds.
 * @method void setCreateTime(integer $CreateTime) Set Application submission time in the format of UNIX timestamp in seconds.
 */
class DescribeSignListStatus extends AbstractModel
{
    /**
     * @var integer Signature ID
     */
    public $SignId;

    /**
     * @var integer Whether it is Global SMS. Valid values:
0: Mainland China SMS.
1: Global SMS
     */
    public $International;

    /**
     * @var integer Signature application status. Valid values:
0: approved.
-1: rejected or failed.
     */
    public $StatusCode;

    /**
     * @var string Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
     */
    public $ReviewReply;

    /**
     * @var string Signature name.
     */
    public $SignName;

    /**
     * @var integer Application submission time in the format of UNIX timestamp in seconds.
     */
    public $CreateTime;

    /**
     * @param integer $SignId Signature ID
     * @param integer $International Whether it is Global SMS. Valid values:
0: Mainland China SMS.
1: Global SMS
     * @param integer $StatusCode Signature application status. Valid values:
0: approved.
-1: rejected or failed.
     * @param string $ReviewReply Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
     * @param string $SignName Signature name.
     * @param integer $CreateTime Application submission time in the format of UNIX timestamp in seconds.
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ReviewReply",$param) and $param["ReviewReply"] !== null) {
            $this->ReviewReply = $param["ReviewReply"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
