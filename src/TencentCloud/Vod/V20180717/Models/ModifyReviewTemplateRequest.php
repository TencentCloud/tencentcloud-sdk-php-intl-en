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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReviewTemplate request structure.
 *
 * @method integer getDefinition() Obtain Review template unique identifier.
 * @method void setDefinition(integer $Definition) Set Review template unique identifier.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Review template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Review template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Review template description information, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Review template description information, with a length limit of 256 characters.
 * @method array getLabels() Obtain List of rule violation tags to return. Optional values:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language;</li>
<li>Ad: advertisement;</li>
<li>Moan: panting.</li>

Note: Leaving it blank means it does not update.
 * @method void setLabels(array $Labels) Set List of rule violation tags to return. Optional values:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language;</li>
<li>Ad: advertisement;</li>
<li>Moan: panting.</li>

Note: Leaving it blank means it does not update.
 */
class ModifyReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer Review template unique identifier.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Review template name, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @var string Review template description information, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var array List of rule violation tags to return. Optional values:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language;</li>
<li>Ad: advertisement;</li>
<li>Moan: panting.</li>

Note: Leaving it blank means it does not update.
     */
    public $Labels;

    /**
     * @param integer $Definition Review template unique identifier.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
     * @param string $Name Review template name, with a length limit of 64 characters.
     * @param string $Comment Review template description information, with a length limit of 256 characters.
     * @param array $Labels List of rule violation tags to return. Optional values:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language;</li>
<li>Ad: advertisement;</li>
<li>Moan: panting.</li>

Note: Leaving it blank means it does not update.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
