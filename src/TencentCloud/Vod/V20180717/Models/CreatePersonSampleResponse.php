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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonSample response structure.
 *
 * @method AiSamplePerson getPerson() Obtain Figure information.
 * @method void setPerson(AiSamplePerson $Person) Set Figure information.
 * @method array getFailFaceInfoSet() Obtain Face information failed to be processed.
 * @method void setFailFaceInfoSet(array $FailFaceInfoSet) Set Face information failed to be processed.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreatePersonSampleResponse extends AbstractModel
{
    /**
     * @var AiSamplePerson Figure information.
     */
    public $Person;

    /**
     * @var array Face information failed to be processed.
     */
    public $FailFaceInfoSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param AiSamplePerson $Person Figure information.
     * @param array $FailFaceInfoSet Face information failed to be processed.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new AiSamplePerson();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("FailFaceInfoSet",$param) and $param["FailFaceInfoSet"] !== null) {
            $this->FailFaceInfoSet = [];
            foreach ($param["FailFaceInfoSet"] as $key => $value){
                $obj = new AiSampleFailFaceInfo();
                $obj->deserialize($value);
                array_push($this->FailFaceInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
