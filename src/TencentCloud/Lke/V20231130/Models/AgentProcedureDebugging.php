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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Debugging information of the agent thinking process.
 *
 * @method string getContent() Obtain Model thinking content.
 * @method void setContent(string $Content) Set Model thinking content.
 * @method string getDisplayContent() Obtain The specific text content to be displayed.
 * @method void setDisplayContent(string $DisplayContent) Set The specific text content to be displayed.
 * @method integer getDisplayType() Obtain Display type.
 * @method void setDisplayType(integer $DisplayType) Set Display type.
 * @method array getQuoteInfos() Obtain Index displayed by the search engine.
 * @method void setQuoteInfos(array $QuoteInfos) Set Index displayed by the search engine.
 * @method array getReferences() Obtain Specific reference source.
 * @method void setReferences(array $References) Set Specific reference source.
 * @method string getDisplayStatus() Obtain Display the ongoing status.
 * @method void setDisplayStatus(string $DisplayStatus) Set Display the ongoing status.
 * @method string getSandboxUrl() Obtain URL of cloud desktop.
 * @method void setSandboxUrl(string $SandboxUrl) Set URL of cloud desktop.
 * @method string getDisplayUrl() Obtain URL opened through the browser in cloud desktop.
 * @method void setDisplayUrl(string $DisplayUrl) Set URL opened through the browser in cloud desktop.
 */
class AgentProcedureDebugging extends AbstractModel
{
    /**
     * @var string Model thinking content.
     */
    public $Content;

    /**
     * @var string The specific text content to be displayed.
     */
    public $DisplayContent;

    /**
     * @var integer Display type.
     */
    public $DisplayType;

    /**
     * @var array Index displayed by the search engine.
     */
    public $QuoteInfos;

    /**
     * @var array Specific reference source.
     */
    public $References;

    /**
     * @var string Display the ongoing status.
     */
    public $DisplayStatus;

    /**
     * @var string URL of cloud desktop.
     */
    public $SandboxUrl;

    /**
     * @var string URL opened through the browser in cloud desktop.
     */
    public $DisplayUrl;

    /**
     * @param string $Content Model thinking content.
     * @param string $DisplayContent The specific text content to be displayed.
     * @param integer $DisplayType Display type.
     * @param array $QuoteInfos Index displayed by the search engine.
     * @param array $References Specific reference source.
     * @param string $DisplayStatus Display the ongoing status.
     * @param string $SandboxUrl URL of cloud desktop.
     * @param string $DisplayUrl URL opened through the browser in cloud desktop.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("DisplayContent",$param) and $param["DisplayContent"] !== null) {
            $this->DisplayContent = $param["DisplayContent"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new QuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new AgentReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("DisplayStatus",$param) and $param["DisplayStatus"] !== null) {
            $this->DisplayStatus = $param["DisplayStatus"];
        }

        if (array_key_exists("SandboxUrl",$param) and $param["SandboxUrl"] !== null) {
            $this->SandboxUrl = $param["SandboxUrl"];
        }

        if (array_key_exists("DisplayUrl",$param) and $param["DisplayUrl"] !== null) {
            $this->DisplayUrl = $param["DisplayUrl"];
        }
    }
}
