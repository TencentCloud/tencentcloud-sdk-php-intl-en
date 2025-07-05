<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * ModifySmsTemplate request structure.
 *
 * @method integer getTemplateId() Obtain ID of template to be modified.
 * @method void setTemplateId(integer $TemplateId) Set ID of template to be modified.
 * @method string getTemplateName() Obtain New template name.
 * @method void setTemplateName(string $TemplateName) Set New template name.
 * @method string getTemplateContent() Obtain New template content.
 * @method void setTemplateContent(string $TemplateContent) Set New template content.
 * @method integer getSmsType() Obtain SMS type. 0: ordinary SMS, 1: marketing SMS.
 * @method void setSmsType(integer $SmsType) Set SMS type. 0: ordinary SMS, 1: marketing SMS.
 * @method integer getInternational() Obtain Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method void setInternational(integer $International) Set Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method string getRemark() Obtain Template remarks, such as reason for application and use case.
 * @method void setRemark(string $Remark) Set Template remarks, such as reason for application and use case.
 */
class ModifySmsTemplateRequest extends AbstractModel
{
    /**
     * @var integer ID of template to be modified.
     */
    public $TemplateId;

    /**
     * @var string New template name.
     */
    public $TemplateName;

    /**
     * @var string New template content.
     */
    public $TemplateContent;

    /**
     * @var integer SMS type. 0: ordinary SMS, 1: marketing SMS.
     */
    public $SmsType;

    /**
     * @var integer Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     */
    public $International;

    /**
     * @var string Template remarks, such as reason for application and use case.
     */
    public $Remark;

    /**
     * @param integer $TemplateId ID of template to be modified.
     * @param string $TemplateName New template name.
     * @param string $TemplateContent New template content.
     * @param integer $SmsType SMS type. 0: ordinary SMS, 1: marketing SMS.
     * @param integer $International Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     * @param string $Remark Template remarks, such as reason for application and use case.
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = $param["TemplateContent"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
