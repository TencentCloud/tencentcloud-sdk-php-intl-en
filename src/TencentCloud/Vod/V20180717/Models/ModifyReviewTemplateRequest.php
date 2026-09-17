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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method array getLabels() Obtain 
 * @method void setLabels(array $Labels) Set 
 */
class ModifyReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var array 
     */
    public $Labels;

    /**
     * @param integer $Definition 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param array $Labels 
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
