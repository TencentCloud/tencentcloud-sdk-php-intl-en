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
 * Address information
 *
 * @method string getAddressTemplateId() Obtain ipm-xxxxxxxx
 * @method void setAddressTemplateId(string $AddressTemplateId) Set ipm-xxxxxxxx
 * @method string getAddressTemplateName() Obtain IP template name
 * @method void setAddressTemplateName(string $AddressTemplateName) Set IP template name
 * @method string getFrom() Obtain Disused
 * @method void setFrom(string $From) Set Disused
 * @method string getTo() Obtain Disused
 * @method void setTo(string $To) Set Disused
 */
class AddressTemplateItem extends AbstractModel
{
    /**
     * @var string ipm-xxxxxxxx
     */
    public $AddressTemplateId;

    /**
     * @var string IP template name
     */
    public $AddressTemplateName;

    /**
     * @var string Disused
     */
    public $From;

    /**
     * @var string Disused
     */
    public $To;

    /**
     * @param string $AddressTemplateId ipm-xxxxxxxx
     * @param string $AddressTemplateName IP template name
     * @param string $From Disused
     * @param string $To Disused
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
        if (array_key_exists("AddressTemplateId",$param) and $param["AddressTemplateId"] !== null) {
            $this->AddressTemplateId = $param["AddressTemplateId"];
        }

        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }
    }
}
