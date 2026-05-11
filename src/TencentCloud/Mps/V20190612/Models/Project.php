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
 * Episode project information.
 *
 * @method string getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID.</p>
 * @method string getProjectName() Obtain <p>Project name.</p>
 * @method void setProjectName(string $ProjectName) Set <p>Project name.</p>
 * @method string getDescription() Obtain <p>Project description.</p>
 * @method void setDescription(string $Description) Set <p>Project description.</p>
 * @method array getTermBase() Obtain <p>Project term base.</p>
 * @method void setTermBase(array $TermBase) Set <p>Project term base.</p>
 * @method array getSpeakers() Obtain <p>List of characters.</p>
 * @method void setSpeakers(array $Speakers) Set <p>List of characters.</p>
 * @method integer getCreatedAt() Obtain <p>Creation time (Unix timestamp).</p>
 * @method void setCreatedAt(integer $CreatedAt) Set <p>Creation time (Unix timestamp).</p>
 * @method integer getUpdatedAt() Obtain <p>Update time (Unix timestamp).</p>
 * @method void setUpdatedAt(integer $UpdatedAt) Set <p>Update time (Unix timestamp).</p>
 */
class Project extends AbstractModel
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
     * @var string <p>Project description.</p>
     */
    public $Description;

    /**
     * @var array <p>Project term base.</p>
     */
    public $TermBase;

    /**
     * @var array <p>List of characters.</p>
     */
    public $Speakers;

    /**
     * @var integer <p>Creation time (Unix timestamp).</p>
     */
    public $CreatedAt;

    /**
     * @var integer <p>Update time (Unix timestamp).</p>
     */
    public $UpdatedAt;

    /**
     * @param string $ProjectId <p>Project ID.</p>
     * @param string $ProjectName <p>Project name.</p>
     * @param string $Description <p>Project description.</p>
     * @param array $TermBase <p>Project term base.</p>
     * @param array $Speakers <p>List of characters.</p>
     * @param integer $CreatedAt <p>Creation time (Unix timestamp).</p>
     * @param integer $UpdatedAt <p>Update time (Unix timestamp).</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TermBase",$param) and $param["TermBase"] !== null) {
            $this->TermBase = [];
            foreach ($param["TermBase"] as $key => $value){
                $obj = new TermBase();
                $obj->deserialize($value);
                array_push($this->TermBase, $obj);
            }
        }

        if (array_key_exists("Speakers",$param) and $param["Speakers"] !== null) {
            $this->Speakers = [];
            foreach ($param["Speakers"] as $key => $value){
                $obj = new Speakers();
                $obj->deserialize($value);
                array_push($this->Speakers, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
