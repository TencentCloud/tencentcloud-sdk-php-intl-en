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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmailIdentity request structure.
 *
 * @method string getEmailIdentity() Obtain <p>For your sender domain name, recommend using a level 3 or higher domain name. Example: mail.qcloud.com.</p>
 * @method void setEmailIdentity(string $EmailIdentity) Set <p>For your sender domain name, recommend using a level 3 or higher domain name. Example: mail.qcloud.com.</p>
 * @method integer getDKIMOption() Obtain <p>Generated dkim key length. 0:1024, 1:2048</p>
 * @method void setDKIMOption(integer $DKIMOption) Set <p>Generated dkim key length. 0:1024, 1:2048</p>
 * @method array getTagList() Obtain <p>tag</p>
 * @method void setTagList(array $TagList) Set <p>tag</p>
 */
class CreateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string <p>For your sender domain name, recommend using a level 3 or higher domain name. Example: mail.qcloud.com.</p>
     */
    public $EmailIdentity;

    /**
     * @var integer <p>Generated dkim key length. 0:1024, 1:2048</p>
     */
    public $DKIMOption;

    /**
     * @var array <p>tag</p>
     */
    public $TagList;

    /**
     * @param string $EmailIdentity <p>For your sender domain name, recommend using a level 3 or higher domain name. Example: mail.qcloud.com.</p>
     * @param integer $DKIMOption <p>Generated dkim key length. 0:1024, 1:2048</p>
     * @param array $TagList <p>tag</p>
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
        if (array_key_exists("EmailIdentity",$param) and $param["EmailIdentity"] !== null) {
            $this->EmailIdentity = $param["EmailIdentity"];
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
