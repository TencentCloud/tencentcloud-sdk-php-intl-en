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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for getting SMS template information
 *
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method integer getInternational() Obtain Whether it is Global SMS. 0: Mainland China SMS; 1: Global SMS.
 * @method void setInternational(integer $International) Set Whether it is Global SMS. 0: Mainland China SMS; 1: Global SMS.
 * @method integer getStatusCode() Obtain Template application status. Valid values: 0: approved and effective; 1: under review; 2: approved but to be effective; -1: application rejected or failed.
 * @method void setStatusCode(integer $StatusCode) Set Template application status. Valid values: 0: approved and effective; 1: under review; 2: approved but to be effective; -1: application rejected or failed.
 * @method string getReviewReply() Obtain Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
 * @method void setReviewReply(string $ReviewReply) Set Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method integer getCreateTime() Obtain Application submission time in the format of UNIX timestamp in seconds.
 * @method void setCreateTime(integer $CreateTime) Set Application submission time in the format of UNIX timestamp in seconds.
 * @method string getTemplateContent() Obtain Template content.
 * @method void setTemplateContent(string $TemplateContent) Set Template content.
 */
class DescribeTemplateListStatus extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var integer Whether it is Global SMS. 0: Mainland China SMS; 1: Global SMS.
     */
    public $International;

    /**
     * @var integer Template application status. Valid values: 0: approved and effective; 1: under review; 2: approved but to be effective; -1: application rejected or failed.
     */
    public $StatusCode;

    /**
     * @var string Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
     */
    public $ReviewReply;

    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var integer Application submission time in the format of UNIX timestamp in seconds.
     */
    public $CreateTime;

    /**
     * @var string Template content.
     */
    public $TemplateContent;

    /**
     * @param integer $TemplateId Template ID.
     * @param integer $International Whether it is Global SMS. 0: Mainland China SMS; 1: Global SMS.
     * @param integer $StatusCode Template application status. Valid values: 0: approved and effective; 1: under review; 2: approved but to be effective; -1: application rejected or failed.
     * @param string $ReviewReply Review reply, i.e., response given by the reviewer, which is usually the reason for rejection.
     * @param string $TemplateName Template name.
     * @param integer $CreateTime Application submission time in the format of UNIX timestamp in seconds.
     * @param string $TemplateContent Template content.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = $param["TemplateContent"];
        }
    }
}
