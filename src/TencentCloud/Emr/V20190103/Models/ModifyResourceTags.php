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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forcibly Modifying Tags
 *
 * @method string getResourceId() Obtain Cluster ID or CVM ID
 * @method void setResourceId(string $ResourceId) Set Cluster ID or CVM ID
 * @method string getResource() Obtain 6-segment resource expression
 * @method void setResource(string $Resource) Set 6-segment resource expression
 * @method string getResourcePrefix() Obtain Resource prefix
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix
 * @method string getResourceRegion() Obtain ap-beijing
 * @method void setResourceRegion(string $ResourceRegion) Set ap-beijing
 * @method string getServiceType() Obtain emr
 * @method void setServiceType(string $ServiceType) Set emr
 * @method array getDeleteTags() Obtain List of deleted tags
 * @method void setDeleteTags(array $DeleteTags) Set List of deleted tags
 * @method array getAddTags() Obtain List of added tags
 * @method void setAddTags(array $AddTags) Set List of added tags
 * @method array getModifyTags() Obtain List of modified tags
 * @method void setModifyTags(array $ModifyTags) Set List of modified tags
 */
class ModifyResourceTags extends AbstractModel
{
    /**
     * @var string Cluster ID or CVM ID
     */
    public $ResourceId;

    /**
     * @var string 6-segment resource expression
     */
    public $Resource;

    /**
     * @var string Resource prefix
     */
    public $ResourcePrefix;

    /**
     * @var string ap-beijing
     */
    public $ResourceRegion;

    /**
     * @var string emr
     */
    public $ServiceType;

    /**
     * @var array List of deleted tags
     */
    public $DeleteTags;

    /**
     * @var array List of added tags
     */
    public $AddTags;

    /**
     * @var array List of modified tags
     */
    public $ModifyTags;

    /**
     * @param string $ResourceId Cluster ID or CVM ID
     * @param string $Resource 6-segment resource expression
     * @param string $ResourcePrefix Resource prefix
     * @param string $ResourceRegion ap-beijing
     * @param string $ServiceType emr
     * @param array $DeleteTags List of deleted tags
     * @param array $AddTags List of added tags
     * @param array $ModifyTags List of modified tags
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = [];
            foreach ($param["AddTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->AddTags, $obj);
            }
        }

        if (array_key_exists("ModifyTags",$param) and $param["ModifyTags"] !== null) {
            $this->ModifyTags = [];
            foreach ($param["ModifyTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ModifyTags, $obj);
            }
        }
    }
}
