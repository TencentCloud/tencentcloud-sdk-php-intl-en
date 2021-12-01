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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP address template
 *
 * @method string getAddressTemplateName() Obtain IP address template name.
 * @method void setAddressTemplateName(string $AddressTemplateName) Set IP address template name.
 * @method string getAddressTemplateId() Obtain The unique ID of the IP address template instance.
 * @method void setAddressTemplateId(string $AddressTemplateId) Set The unique ID of the IP address template instance.
 * @method array getAddressSet() Obtain IP address information.
 * @method void setAddressSet(array $AddressSet) Set IP address information.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method array getAddressExtraSet() Obtain IP address information with remarks
 * @method void setAddressExtraSet(array $AddressExtraSet) Set IP address information with remarks
 */
class AddressTemplate extends AbstractModel
{
    /**
     * @var string IP address template name.
     */
    public $AddressTemplateName;

    /**
     * @var string The unique ID of the IP address template instance.
     */
    public $AddressTemplateId;

    /**
     * @var array IP address information.
     */
    public $AddressSet;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var array IP address information with remarks
     */
    public $AddressExtraSet;

    /**
     * @param string $AddressTemplateName IP address template name.
     * @param string $AddressTemplateId The unique ID of the IP address template instance.
     * @param array $AddressSet IP address information.
     * @param string $CreatedTime Creation Time.
     * @param array $AddressExtraSet IP address information with remarks
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
        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("AddressTemplateId",$param) and $param["AddressTemplateId"] !== null) {
            $this->AddressTemplateId = $param["AddressTemplateId"];
        }

        if (array_key_exists("AddressSet",$param) and $param["AddressSet"] !== null) {
            $this->AddressSet = $param["AddressSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AddressExtraSet",$param) and $param["AddressExtraSet"] !== null) {
            $this->AddressExtraSet = [];
            foreach ($param["AddressExtraSet"] as $key => $value){
                $obj = new AddressInfo();
                $obj->deserialize($value);
                array_push($this->AddressExtraSet, $obj);
            }
        }
    }
}
