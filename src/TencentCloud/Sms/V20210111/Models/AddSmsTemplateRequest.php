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
 * AddSmsTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method string getTemplateContent() Obtain Template content.
 * @method void setTemplateContent(string $TemplateContent) Set Template content.
 * @method integer getSmsType() Obtain SMS type. 1: Marketing SMS, 2: Notification SMS, 3: OTP SMS.
Note: To further improve the quality of SMS service and increase the approval rate of SMS templates, Tencent Cloud SMS template types will be optimized to "OTP", "Notification", and "Marketing" from May 16, 2024. You can Refer to [Optimization of Tencent Cloud SMS Template Types](https://www.tencentcloud.com/document/product/382/60410). Customers who newly register for SMS service must strictly refer to the new SMS type to apply for SMS template.
 * @method void setSmsType(integer $SmsType) Set SMS type. 1: Marketing SMS, 2: Notification SMS, 3: OTP SMS.
Note: To further improve the quality of SMS service and increase the approval rate of SMS templates, Tencent Cloud SMS template types will be optimized to "OTP", "Notification", and "Marketing" from May 16, 2024. You can Refer to [Optimization of Tencent Cloud SMS Template Types](https://www.tencentcloud.com/document/product/382/60410). Customers who newly register for SMS service must strictly refer to the new SMS type to apply for SMS template.
 * @method integer getInternational() Obtain Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method void setInternational(integer $International) Set Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method string getRemark() Obtain Template remarks, such as reason for application and use case.
 * @method void setRemark(string $Remark) Set Template remarks, such as reason for application and use case.
 */
class AddSmsTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var string Template content.
     */
    public $TemplateContent;

    /**
     * @var integer SMS type. 1: Marketing SMS, 2: Notification SMS, 3: OTP SMS.
Note: To further improve the quality of SMS service and increase the approval rate of SMS templates, Tencent Cloud SMS template types will be optimized to "OTP", "Notification", and "Marketing" from May 16, 2024. You can Refer to [Optimization of Tencent Cloud SMS Template Types](https://www.tencentcloud.com/document/product/382/60410). Customers who newly register for SMS service must strictly refer to the new SMS type to apply for SMS template.
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
     * @param string $TemplateName Template name.
     * @param string $TemplateContent Template content.
     * @param integer $SmsType SMS type. 1: Marketing SMS, 2: Notification SMS, 3: OTP SMS.
Note: To further improve the quality of SMS service and increase the approval rate of SMS templates, Tencent Cloud SMS template types will be optimized to "OTP", "Notification", and "Marketing" from May 16, 2024. You can Refer to [Optimization of Tencent Cloud SMS Template Types](https://www.tencentcloud.com/document/product/382/60410). Customers who newly register for SMS service must strictly refer to the new SMS type to apply for SMS template.
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
