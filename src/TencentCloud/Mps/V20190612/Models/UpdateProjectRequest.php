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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProject request structure.
 *
 * @method string getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID.</p>
 * @method string getProjectName() Obtain <p>Project name.</p>
 * @method void setProjectName(string $ProjectName) Set <p>Project name.</p>
 * @method array getTermBase() Obtain <p>Project term base.</p>
 * @method void setTermBase(array $TermBase) Set <p>Project term base.</p>
 * @method string getDescription() Obtain <p>Project description.</p>
 * @method void setDescription(string $Description) Set <p>Project description.</p>
 * @method array getSpeakers() Obtain <p>List of characters.</p>
 * @method void setSpeakers(array $Speakers) Set <p>List of characters.</p>
 */
class UpdateProjectRequest extends AbstractModel
{
    /**
     * @var string <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Project name.</p>
     */
    public $ProjectName;

    /**
     * @var array <p>Project term base.</p>
     */
    public $TermBase;

    /**
     * @var string <p>Project description.</p>
     */
    public $Description;

    /**
     * @var array <p>List of characters.</p>
     */
    public $Speakers;

    /**
     * @param string $ProjectId <p>Project ID.</p>
     * @param string $ProjectName <p>Project name.</p>
     * @param array $TermBase <p>Project term base.</p>
     * @param string $Description <p>Project description.</p>
     * @param array $Speakers <p>List of characters.</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("TermBase",$param) and $param["TermBase"] !== null) {
            $this->TermBase = [];
            foreach ($param["TermBase"] as $key => $value){
                $obj = new TermBase();
                $obj->deserialize($value);
                array_push($this->TermBase, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Speakers",$param) and $param["Speakers"] !== null) {
            $this->Speakers = [];
            foreach ($param["Speakers"] as $key => $value){
                $obj = new Speakers();
                $obj->deserialize($value);
                array_push($this->Speakers, $obj);
            }
        }
    }
}
