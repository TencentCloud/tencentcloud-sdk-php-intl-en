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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEmailTemplate response structure.
 *
 * @method TemplateContent getTemplateContent() Obtain Template content.
 * @method void setTemplateContent(TemplateContent $TemplateContent) Set Template content.
 * @method integer getTemplateStatus() Obtain Template status. Valid values: `0` (approved); `1` (pending approval); `2` (rejected).
 * @method void setTemplateStatus(integer $TemplateStatus) Set Template status. Valid values: `0` (approved); `1` (pending approval); `2` (rejected).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetEmailTemplateResponse extends AbstractModel
{
    /**
     * @var TemplateContent Template content.
     */
    public $TemplateContent;

    /**
     * @var integer Template status. Valid values: `0` (approved); `1` (pending approval); `2` (rejected).
     */
    public $TemplateStatus;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TemplateContent $TemplateContent Template content.
     * @param integer $TemplateStatus Template status. Valid values: `0` (approved); `1` (pending approval); `2` (rejected).
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
        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = new TemplateContent();
            $this->TemplateContent->deserialize($param["TemplateContent"]);
        }

        if (array_key_exists("TemplateStatus",$param) and $param["TemplateStatus"] !== null) {
            $this->TemplateStatus = $param["TemplateStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
