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
 * CreateHeadTailTemplate request structure.
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method array getHeadCandidateSet() Obtain 
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set 
 * @method array getTailCandidateSet() Obtain 
 * @method void setTailCandidateSet(array $TailCandidateSet) Set 
 * @method string getFillType() Obtain 
 * @method void setFillType(string $FillType) Set 
 */
class CreateHeadTailTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var array 
     */
    public $HeadCandidateSet;

    /**
     * @var array 
     */
    public $TailCandidateSet;

    /**
     * @var string 
     */
    public $FillType;

    /**
     * @param string $Name 
     * @param integer $SubAppId 
     * @param string $Comment 
     * @param array $HeadCandidateSet 
     * @param array $TailCandidateSet 
     * @param string $FillType 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("HeadCandidateSet",$param) and $param["HeadCandidateSet"] !== null) {
            $this->HeadCandidateSet = $param["HeadCandidateSet"];
        }

        if (array_key_exists("TailCandidateSet",$param) and $param["TailCandidateSet"] !== null) {
            $this->TailCandidateSet = $param["TailCandidateSet"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
