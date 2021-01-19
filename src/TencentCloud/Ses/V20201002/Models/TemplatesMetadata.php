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
 * Template list structure.
 *
 * @method integer getCreatedTimestamp() Obtain Creation time.
 * @method void setCreatedTimestamp(integer $CreatedTimestamp) Set Creation time.
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method integer getTemplateStatus() Obtain Template status. 1: under review; 0: approved; 2: rejected; other values: unavailable.
 * @method void setTemplateStatus(integer $TemplateStatus) Set Template status. 1: under review; 0: approved; 2: rejected; other values: unavailable.
 * @method integer getTemplateID() Obtain Template ID.
 * @method void setTemplateID(integer $TemplateID) Set Template ID.
 * @method string getReviewReason() Obtain Review reply
 * @method void setReviewReason(string $ReviewReason) Set Review reply
 */
class TemplatesMetadata extends AbstractModel
{
    /**
     * @var integer Creation time.
     */
    public $CreatedTimestamp;

    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var integer Template status. 1: under review; 0: approved; 2: rejected; other values: unavailable.
     */
    public $TemplateStatus;

    /**
     * @var integer Template ID.
     */
    public $TemplateID;

    /**
     * @var string Review reply
     */
    public $ReviewReason;

    /**
     * @param integer $CreatedTimestamp Creation time.
     * @param string $TemplateName Template name.
     * @param integer $TemplateStatus Template status. 1: under review; 0: approved; 2: rejected; other values: unavailable.
     * @param integer $TemplateID Template ID.
     * @param string $ReviewReason Review reply
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
        if (array_key_exists("CreatedTimestamp",$param) and $param["CreatedTimestamp"] !== null) {
            $this->CreatedTimestamp = $param["CreatedTimestamp"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateStatus",$param) and $param["TemplateStatus"] !== null) {
            $this->TemplateStatus = $param["TemplateStatus"];
        }

        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("ReviewReason",$param) and $param["ReviewReason"] !== null) {
            $this->ReviewReason = $param["ReviewReason"];
        }
    }
}
