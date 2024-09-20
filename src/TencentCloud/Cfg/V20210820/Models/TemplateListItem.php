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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template library list information
 *
 * @method integer getTemplateId() Obtain Template library ID
 * @method void setTemplateId(integer $TemplateId) Set Template library ID
 * @method string getTemplateTitle() Obtain Template library name
 * @method void setTemplateTitle(string $TemplateTitle) Set Template library name
 * @method string getTemplateDescription() Obtain Template library description
 * @method void setTemplateDescription(string $TemplateDescription) Set Template library description
 * @method string getTemplateTag() Obtain Template library tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateTag(string $TemplateTag) Set Template library tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTemplateIsUsed() Obtain Template library status. 1: in use; 2: not in use.
 * @method void setTemplateIsUsed(integer $TemplateIsUsed) Set Template library status. 1: in use; 2: not in use.
 * @method string getTemplateCreateTime() Obtain Template library creation time
 * @method void setTemplateCreateTime(string $TemplateCreateTime) Set Template library creation time
 * @method string getTemplateUpdateTime() Obtain Template library update time
 * @method void setTemplateUpdateTime(string $TemplateUpdateTime) Set Template library update time
 * @method integer getTemplateUsedNum() Obtain Number of tasks associated with the template library
 * @method void setTemplateUsedNum(integer $TemplateUsedNum) Set Number of tasks associated with the template library
 * @method integer getTemplateSource() Obtain Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateSource(integer $TemplateSource) Set Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TemplateListItem extends AbstractModel
{
    /**
     * @var integer Template library ID
     */
    public $TemplateId;

    /**
     * @var string Template library name
     */
    public $TemplateTitle;

    /**
     * @var string Template library description
     */
    public $TemplateDescription;

    /**
     * @var string Template library tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateTag;

    /**
     * @var integer Template library status. 1: in use; 2: not in use.
     */
    public $TemplateIsUsed;

    /**
     * @var string Template library creation time
     */
    public $TemplateCreateTime;

    /**
     * @var string Template library update time
     */
    public $TemplateUpdateTime;

    /**
     * @var integer Number of tasks associated with the template library
     */
    public $TemplateUsedNum;

    /**
     * @var integer Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateSource;

    /**
     * @param integer $TemplateId Template library ID
     * @param string $TemplateTitle Template library name
     * @param string $TemplateDescription Template library description
     * @param string $TemplateTag Template library tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TemplateIsUsed Template library status. 1: in use; 2: not in use.
     * @param string $TemplateCreateTime Template library creation time
     * @param string $TemplateUpdateTime Template library update time
     * @param integer $TemplateUsedNum Number of tasks associated with the template library
     * @param integer $TemplateSource Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("TemplateTitle",$param) and $param["TemplateTitle"] !== null) {
            $this->TemplateTitle = $param["TemplateTitle"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateTag",$param) and $param["TemplateTag"] !== null) {
            $this->TemplateTag = $param["TemplateTag"];
        }

        if (array_key_exists("TemplateIsUsed",$param) and $param["TemplateIsUsed"] !== null) {
            $this->TemplateIsUsed = $param["TemplateIsUsed"];
        }

        if (array_key_exists("TemplateCreateTime",$param) and $param["TemplateCreateTime"] !== null) {
            $this->TemplateCreateTime = $param["TemplateCreateTime"];
        }

        if (array_key_exists("TemplateUpdateTime",$param) and $param["TemplateUpdateTime"] !== null) {
            $this->TemplateUpdateTime = $param["TemplateUpdateTime"];
        }

        if (array_key_exists("TemplateUsedNum",$param) and $param["TemplateUsedNum"] !== null) {
            $this->TemplateUsedNum = $param["TemplateUsedNum"];
        }

        if (array_key_exists("TemplateSource",$param) and $param["TemplateSource"] !== null) {
            $this->TemplateSource = $param["TemplateSource"];
        }
    }
}
