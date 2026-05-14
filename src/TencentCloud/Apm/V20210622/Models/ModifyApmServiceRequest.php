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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApmService request structure.
 *
 * @method string getServiceID() Obtain Application ID
 * @method void setServiceID(string $ServiceID) Set Application ID
 * @method string getServiceDescription() Obtain Application description
 * @method void setServiceDescription(string $ServiceDescription) Set Application description
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 */
class ModifyApmServiceRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ServiceID;

    /**
     * @var string Application description
     */
    public $ServiceDescription;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @param string $ServiceID Application ID
     * @param string $ServiceDescription Application description
     * @param array $Tags Tag list
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
