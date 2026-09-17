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
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method string getGender() Obtain 
 * @method void setGender(string $Gender) Set 
 * @method string getAge() Obtain 
 * @method void setAge(string $Age) Set 
 * @method array getLanguages() Obtain 
 * @method void setLanguages(array $Languages) Set 
 * @method array getLabels() Obtain 
 * @method void setLabels(array $Labels) Set 
 * @method array getScenes() Obtain 
 * @method void setScenes(array $Scenes) Set 
 */
class VoiceSettings extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $Gender;

    /**
     * @var string 
     */
    public $Age;

    /**
     * @var array 
     */
    public $Languages;

    /**
     * @var array 
     */
    public $Labels;

    /**
     * @var array 
     */
    public $Scenes;

    /**
     * @param string $Name 
     * @param string $Description 
     * @param string $Gender 
     * @param string $Age 
     * @param array $Languages 
     * @param array $Labels 
     * @param array $Scenes 
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }
    }
}
