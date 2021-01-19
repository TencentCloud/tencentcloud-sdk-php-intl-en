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
 * Recognition result items by group
 *
 * @method string getGroupId() Obtain Group ID.
 * @method void setGroupId(string $GroupId) Set Group ID.
 * @method array getCandidates() Obtain Most matching candidate recognized
 * @method void setCandidates(array $Candidates) Set Most matching candidate recognized
 */
class GroupCandidate extends AbstractModel
{
    /**
     * @var string Group ID.
     */
    public $GroupId;

    /**
     * @var array Most matching candidate recognized
     */
    public $Candidates;

    /**
     * @param string $GroupId Group ID.
     * @param array $Candidates Most matching candidate recognized
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = [];
            foreach ($param["Candidates"] as $key => $value){
                $obj = new Candidate();
                $obj->deserialize($value);
                array_push($this->Candidates, $obj);
            }
        }
    }
}
