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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPersonBaseInfo request structure.
 *
 * @method string getPersonId() Obtain Person ID
 * @method void setPersonId(string $PersonId) Set Person ID
 * @method string getPersonName() Obtain Name of the person to be modified
 * @method void setPersonName(string $PersonName) Set Name of the person to be modified
 * @method integer getGender() Obtain Gender of the person to be modified
 * @method void setGender(integer $Gender) Set Gender of the person to be modified
 */
class ModifyPersonBaseInfoRequest extends AbstractModel
{
    /**
     * @var string Person ID
     */
    public $PersonId;

    /**
     * @var string Name of the person to be modified
     */
    public $PersonName;

    /**
     * @var integer Gender of the person to be modified
     */
    public $Gender;

    /**
     * @param string $PersonId Person ID
     * @param string $PersonName Name of the person to be modified
     * @param integer $Gender Gender of the person to be modified
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }
    }
}
