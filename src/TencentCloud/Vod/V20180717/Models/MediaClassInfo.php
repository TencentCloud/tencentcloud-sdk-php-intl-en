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
 * 
 *
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method integer getParentId() Obtain 
 * @method void setParentId(integer $ParentId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getLevel() Obtain 
 * @method void setLevel(integer $Level) Set 
 * @method array getSubClassIdSet() Obtain 
 * @method void setSubClassIdSet(array $SubClassIdSet) Set 
 * @method string getClassName() Obtain 
 * @method void setClassName(string $ClassName) Set 
 */
class MediaClassInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var integer 
     */
    public $ParentId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $Level;

    /**
     * @var array 
     */
    public $SubClassIdSet;

    /**
     * @var string 
     */
    public $ClassName;

    /**
     * @param integer $ClassId 
     * @param integer $ParentId 
     * @param string $Name 
     * @param integer $Level 
     * @param array $SubClassIdSet 
     * @param string $ClassName 
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
        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubClassIdSet",$param) and $param["SubClassIdSet"] !== null) {
            $this->SubClassIdSet = $param["SubClassIdSet"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }
    }
}
