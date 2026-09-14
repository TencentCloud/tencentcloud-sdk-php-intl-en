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
 * AI dubbing task
 *
 * @method integer getDefinition() Obtain <p>AI Dubbing template id.</p>
 * @method void setDefinition(integer $Definition) Set <p>AI Dubbing template id.</p>
 * @method RawAIDubbingParameter getRawParameter() Obtain <p>Custom AI dubbing parameter. It takes effect when Definition is set to 0. This parameter is used in highly customized scenarios. We recommend that you use Definition to specify dubbing parameters.</p>
 * @method void setRawParameter(RawAIDubbingParameter $RawParameter) Set <p>Custom AI dubbing parameter. It takes effect when Definition is set to 0. This parameter is used in highly customized scenarios. We recommend that you use Definition to specify dubbing parameters.</p>
 * @method OverrideAIDubbingParameter getOverrideParameter() Obtain <p>AI Dubbing custom parameters. Valid when Definition is not filled with 0. When some dubbing parameters in this structure are filled in, the filled parameters will be used to override the parameters in the AI Dubbing template. This parameter is used for highly customized scenarios. We recommend you use only Definition to specify dubbing parameters.</p>
 * @method void setOverrideParameter(OverrideAIDubbingParameter $OverrideParameter) Set <p>AI Dubbing custom parameters. Valid when Definition is not filled with 0. When some dubbing parameters in this structure are filled in, the filled parameters will be used to override the parameters in the AI Dubbing template. This parameter is used for highly customized scenarios. We recommend you use only Definition to specify dubbing parameters.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Target storage for the file. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Target storage for the file. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
 * @method MediaInputInfo getSrcSubtitleInfo() Obtain <p>External source subtitle file information.</p>
 * @method void setSrcSubtitleInfo(MediaInputInfo $SrcSubtitleInfo) Set <p>External source subtitle file information.</p>
 * @method array getDstSubtitleInfos() Obtain <p>External subtitle file information, translated subtitles.</p>
 * @method void setDstSubtitleInfos(array $DstSubtitleInfos) Set <p>External subtitle file information, translated subtitles.</p>
 * @method string getOutputObjectPath() Obtain <p>Output path of the file, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li><p><strong>Note</strong>: The <code>BatchProcessMedia</code> API is currently not supported.</p>
 * @method void setOutputObjectPath(string $OutputObjectPath) Set <p>Output path of the file, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li><p><strong>Note</strong>: The <code>BatchProcessMedia</code> API is currently not supported.</p>
 * @method string getExtendedParameter() Obtain <p>Additional parameters for AI Dubbing, serialized json string.</p>
 * @method void setExtendedParameter(string $ExtendedParameter) Set <p>Additional parameters for AI Dubbing, serialized json string.</p>
 * @method string getDramaId() Obtain <p>ID of the associated drama series.<br>Note: This value takes effect when dubbing mode is intelligent dubbing by role.</p>
 * @method void setDramaId(string $DramaId) Set <p>ID of the associated drama series.<br>Note: This value takes effect when dubbing mode is intelligent dubbing by role.</p>
 */
class AIDubbingTaskInput extends AbstractModel
{
    /**
     * @var integer <p>AI Dubbing template id.</p>
     */
    public $Definition;

    /**
     * @var RawAIDubbingParameter <p>Custom AI dubbing parameter. It takes effect when Definition is set to 0. This parameter is used in highly customized scenarios. We recommend that you use Definition to specify dubbing parameters.</p>
     */
    public $RawParameter;

    /**
     * @var OverrideAIDubbingParameter <p>AI Dubbing custom parameters. Valid when Definition is not filled with 0. When some dubbing parameters in this structure are filled in, the filled parameters will be used to override the parameters in the AI Dubbing template. This parameter is used for highly customized scenarios. We recommend you use only Definition to specify dubbing parameters.</p>
     */
    public $OverrideParameter;

    /**
     * @var TaskOutputStorage <p>Target storage for the file. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
     */
    public $OutputStorage;

    /**
     * @var MediaInputInfo <p>External source subtitle file information.</p>
     */
    public $SrcSubtitleInfo;

    /**
     * @var array <p>External subtitle file information, translated subtitles.</p>
     */
    public $DstSubtitleInfos;

    /**
     * @var string <p>Output path of the file, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li><p><strong>Note</strong>: The <code>BatchProcessMedia</code> API is currently not supported.</p>
     */
    public $OutputObjectPath;

    /**
     * @var string <p>Additional parameters for AI Dubbing, serialized json string.</p>
     */
    public $ExtendedParameter;

    /**
     * @var string <p>ID of the associated drama series.<br>Note: This value takes effect when dubbing mode is intelligent dubbing by role.</p>
     */
    public $DramaId;

    /**
     * @param integer $Definition <p>AI Dubbing template id.</p>
     * @param RawAIDubbingParameter $RawParameter <p>Custom AI dubbing parameter. It takes effect when Definition is set to 0. This parameter is used in highly customized scenarios. We recommend that you use Definition to specify dubbing parameters.</p>
     * @param OverrideAIDubbingParameter $OverrideParameter <p>AI Dubbing custom parameters. Valid when Definition is not filled with 0. When some dubbing parameters in this structure are filled in, the filled parameters will be used to override the parameters in the AI Dubbing template. This parameter is used for highly customized scenarios. We recommend you use only Definition to specify dubbing parameters.</p>
     * @param TaskOutputStorage $OutputStorage <p>Target storage for the file. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
     * @param MediaInputInfo $SrcSubtitleInfo <p>External source subtitle file information.</p>
     * @param array $DstSubtitleInfos <p>External subtitle file information, translated subtitles.</p>
     * @param string $OutputObjectPath <p>Output path of the file, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li><p><strong>Note</strong>: The <code>BatchProcessMedia</code> API is currently not supported.</p>
     * @param string $ExtendedParameter <p>Additional parameters for AI Dubbing, serialized json string.</p>
     * @param string $DramaId <p>ID of the associated drama series.<br>Note: This value takes effect when dubbing mode is intelligent dubbing by role.</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawAIDubbingParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideAIDubbingParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("SrcSubtitleInfo",$param) and $param["SrcSubtitleInfo"] !== null) {
            $this->SrcSubtitleInfo = new MediaInputInfo();
            $this->SrcSubtitleInfo->deserialize($param["SrcSubtitleInfo"]);
        }

        if (array_key_exists("DstSubtitleInfos",$param) and $param["DstSubtitleInfos"] !== null) {
            $this->DstSubtitleInfos = [];
            foreach ($param["DstSubtitleInfos"] as $key => $value){
                $obj = new DstSubtitleInput();
                $obj->deserialize($value);
                array_push($this->DstSubtitleInfos, $obj);
            }
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }

        if (array_key_exists("DramaId",$param) and $param["DramaId"] !== null) {
            $this->DramaId = $param["DramaId"];
        }
    }
}
