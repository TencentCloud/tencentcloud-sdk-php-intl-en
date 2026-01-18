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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAICall request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getCallee() Obtain Called number.
 * @method void setCallee(string $Callee) Set Called number.
 * @method string getLLMType() Obtain Model API protocol type. currently compatible with four protocol types:.

-OpenAI protocol (including GPT, hunyuan, DeepSeek, etc.): "OpenAI".
-Azure protocol: "azure".
-Specifies the "Minimax" protocol.
-Dify protocol: "dify".
 * @method void setLLMType(string $LLMType) Set Model API protocol type. currently compatible with four protocol types:.

-OpenAI protocol (including GPT, hunyuan, DeepSeek, etc.): "OpenAI".
-Azure protocol: "azure".
-Specifies the "Minimax" protocol.
-Dify protocol: "dify".
 * @method string getAPIKey() Obtain Model API key, for authentication information, please refer to the respective model's official website

- OpenAI protocol: [GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key), [DeepSeek](https://api-docs.deepseek.com/zh-cn/);

- Azure protocol: [Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings);

- Minimax:[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
 * @method void setAPIKey(string $APIKey) Set Model API key, for authentication information, please refer to the respective model's official website

- OpenAI protocol: [GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key), [DeepSeek](https://api-docs.deepseek.com/zh-cn/);

- Azure protocol: [Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings);

- Minimax:[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
 * @method string getAPIUrl() Obtain Model interface address

- OpenAI protocol
GPT:"https://api.openai.com/v1/"
Deepseek:"https://api.deepseek.com/v1"

- Azure protocol
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax protocol
"https://api.minimax.chat/v1"
 * @method void setAPIUrl(string $APIUrl) Set Model interface address

- OpenAI protocol
GPT:"https://api.openai.com/v1/"
Deepseek:"https://api.deepseek.com/v1"

- Azure protocol
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax protocol
"https://api.minimax.chat/v1"
 * @method string getSystemPrompt() Obtain ## Identity
You are Kate from the appointment department at Retell Health calling Cindy over the phone to prepare for the annual checkup coming up. You are a pleasant and friendly receptionist caring deeply for the user. You don't provide medical advice but would use the medical knowledge to understand user responses.

## Style Guardrails
Be Concise: Respond succinctly, addressing one topic at most.
Embrace Variety: Use diverse language and rephrasing to enhance clarity without repeating content.
Be Conversational: Use everyday language, making the chat feel like talking to a friend.
Be Proactive: Lead the conversation, often wrapping up with a question or next-step suggestion.
Avoid multiple questions in a single response.
Get clarity: If the user only partially answers a question, or if the answer is unclear, keep asking to get clarity.
Use a colloquial way of referring to the date (like Friday, January 14th, or Tuesday, January 12th, 2024 at 8am).

## Response Guideline
Adapt and Guess: Try to understand transcripts that may contain transcription errors. Avoid mentioning "transcription error" in the response.
Stay in Character: Keep conversations within your role's scope, guiding them back creatively without repeating.
Ensure Fluid Dialogue: Respond in a role-appropriate, direct manner to maintain a smooth conversation flow.

## Task
You will follow the steps below, do not skip steps, and only ask up to one question in response.
If at any time the user showed anger or wanted a human agent, call transfer_call to transfer to a human representative.
1. Begin with a self-introduction and verify if callee is Cindy.
  - if callee is not Cindy, call end_call to hang up, say sorry for the confusion when hanging up.
  - if Cindy is not available, call end_call politely to hang up, say you will call back later when hanging up.
2. Inform Cindy she has an annual body check coming up on April 4th, 2024 at 10am PDT. Check if Cindy is available.
  - If not, tell Cindy to reschedule online and jump to step 5.
3. Ask Cindy if there's anything that the doctor should know before the annual checkup.
  - Ask followup questions as needed to assess the severity of the issue, and understand how it has progressed.
4. Tell Cindy to not eat or drink that day before the checkup. Also tell Cindy to give you a callback if there's any changes in health condition.
5. Ask Cindy if she has any questions, and if so, answer them until there are no questions.
  - If user asks something you do not know, let them know you don't have the answer. Ask them if they have any other questions.
  - If user do not have any questions, call function end_call to hang up.
 * @method void setSystemPrompt(string $SystemPrompt) Set ## Identity
You are Kate from the appointment department at Retell Health calling Cindy over the phone to prepare for the annual checkup coming up. You are a pleasant and friendly receptionist caring deeply for the user. You don't provide medical advice but would use the medical knowledge to understand user responses.

## Style Guardrails
Be Concise: Respond succinctly, addressing one topic at most.
Embrace Variety: Use diverse language and rephrasing to enhance clarity without repeating content.
Be Conversational: Use everyday language, making the chat feel like talking to a friend.
Be Proactive: Lead the conversation, often wrapping up with a question or next-step suggestion.
Avoid multiple questions in a single response.
Get clarity: If the user only partially answers a question, or if the answer is unclear, keep asking to get clarity.
Use a colloquial way of referring to the date (like Friday, January 14th, or Tuesday, January 12th, 2024 at 8am).

## Response Guideline
Adapt and Guess: Try to understand transcripts that may contain transcription errors. Avoid mentioning "transcription error" in the response.
Stay in Character: Keep conversations within your role's scope, guiding them back creatively without repeating.
Ensure Fluid Dialogue: Respond in a role-appropriate, direct manner to maintain a smooth conversation flow.

## Task
You will follow the steps below, do not skip steps, and only ask up to one question in response.
If at any time the user showed anger or wanted a human agent, call transfer_call to transfer to a human representative.
1. Begin with a self-introduction and verify if callee is Cindy.
  - if callee is not Cindy, call end_call to hang up, say sorry for the confusion when hanging up.
  - if Cindy is not available, call end_call politely to hang up, say you will call back later when hanging up.
2. Inform Cindy she has an annual body check coming up on April 4th, 2024 at 10am PDT. Check if Cindy is available.
  - If not, tell Cindy to reschedule online and jump to step 5.
3. Ask Cindy if there's anything that the doctor should know before the annual checkup.
  - Ask followup questions as needed to assess the severity of the issue, and understand how it has progressed.
4. Tell Cindy to not eat or drink that day before the checkup. Also tell Cindy to give you a callback if there's any changes in health condition.
5. Ask Cindy if she has any questions, and if so, answer them until there are no questions.
  - If user asks something you do not know, let them know you don't have the answer. Ask them if they have any other questions.
  - If user do not have any questions, call function end_call to hang up.
 * @method string getModel() Obtain Model name, such as

- OpenAI protocol
"gpt-4o-mini","gpt-4o","deepseek-chat";

- Azure protocol
"gpt-4o-mini", "gpt-4o";

- Minimax protocol
"deepseek-chat".
 * @method void setModel(string $Model) Set Model name, such as

- OpenAI protocol
"gpt-4o-mini","gpt-4o","deepseek-chat";

- Azure protocol
"gpt-4o-mini", "gpt-4o";

- Minimax protocol
"deepseek-chat".
 * @method string getVoiceType() Obtain The following voice parameter values are available by default. If you wish to customize the voice type, please leave VoiceType blank and configure it in the CustomTTSConfig parameter.

Chinese:
ZhiMei: Zhimei, customer service female voice
ZhiXi: Zhixi, general female voice
ZhiQi: Zhiqi, customer service female voice
ZhiTian: Zhitian, female child voice
AiXiaoJing: Ai Xiaojing, dialogue female voice

English:
WeRose:English Female Voice
Monika:English Female Voice

Japanese:
Nanami

Korean:
SunHi

Indonesian (Indonesia):
Gadis

Malay (Malaysia):
Yasmin

 Tamil (Malaysia):
Kani

Thai (Thailand):
Achara

Vietnamese (Vietnam):
HoaiMy


 * @method void setVoiceType(string $VoiceType) Set The following voice parameter values are available by default. If you wish to customize the voice type, please leave VoiceType blank and configure it in the CustomTTSConfig parameter.

Chinese:
ZhiMei: Zhimei, customer service female voice
ZhiXi: Zhixi, general female voice
ZhiQi: Zhiqi, customer service female voice
ZhiTian: Zhitian, female child voice
AiXiaoJing: Ai Xiaojing, dialogue female voice

English:
WeRose:English Female Voice
Monika:English Female Voice

Japanese:
Nanami

Korean:
SunHi

Indonesian (Indonesia):
Gadis

Malay (Malaysia):
Yasmin

 Tamil (Malaysia):
Kani

Thai (Thailand):
Achara

Vietnamese (Vietnam):
HoaiMy


 * @method array getCallers() Obtain Caller number list
 * @method void setCallers(array $Callers) Set Caller number list
 * @method string getWelcomeMessage() Obtain Used to set the AI Agent Welcome Message.
 * @method void setWelcomeMessage(string $WelcomeMessage) Set Used to set the AI Agent Welcome Message.
 * @method integer getWelcomeType() Obtain 0: Use welcomeMessage (if empty, the callee speaks first; if not empty, the bot speaks first)
1:   Use AI to automatically generate welcomeMessage and speak first based on the prompt
 * @method void setWelcomeType(integer $WelcomeType) Set 0: Use welcomeMessage (if empty, the callee speaks first; if not empty, the bot speaks first)
1:   Use AI to automatically generate welcomeMessage and speak first based on the prompt
 * @method integer getWelcomeMessagePriority() Obtain 0: interruptible by default, 2: high priority non-interruptible.
 * @method void setWelcomeMessagePriority(integer $WelcomeMessagePriority) Set 0: interruptible by default, 2: high priority non-interruptible.
 * @method integer getMaxDuration() Obtain Maximum Waiting Duration (milliseconds), default is 60 seconds, if the user does not speak within this time, the call is automatically terminated
 * @method void setMaxDuration(integer $MaxDuration) Set Maximum Waiting Duration (milliseconds), default is 60 seconds, if the user does not speak within this time, the call is automatically terminated
 * @method array getLanguages() Obtain ASR Supported Languages, default is "zh" Chinese,
Fill in the array with up to 4 languages, the first is the primary language for recognition, followed by optional languages,
Note: When the primary language is a Chinese dialect, optional languages are invalid
Currently, the supported languages are as follows. The English name of the language is on the left side of the equals sign, and the value to be filled in the Language field is on the right side, following ISO639:
1. Chinese = "zh" # Chinese
2. Chinese_TW = "zh-TW" # Taiwan (China)
3. Chinese_DIALECT = "zh-dialect" # Chinese Dialect
4. English = "en" # English
5. Vietnamese = "vi" # Vietnamese
6. Japanese = "ja" # Japanese
7. Korean = "ko" # Korean
8. Indonesia = "id" # Indonesian
9. Thai = "th" # Thai
10. Portuguese = "pt" # Portuguese
11. Turkish = "tr" # Turkish
12. Arabic = "ar" # Arabic
13. Spanish = "es" # Spanish
14. Hindi = "hi" # Hindi
15. French = "fr" # French
16. Malay = "ms" # Malay
17. Filipino = "fil" # Filipino
18. German = "de" # German
19. Italian = "it" # Italian
20. Russian = "ru" # Russian
 * @method void setLanguages(array $Languages) Set ASR Supported Languages, default is "zh" Chinese,
Fill in the array with up to 4 languages, the first is the primary language for recognition, followed by optional languages,
Note: When the primary language is a Chinese dialect, optional languages are invalid
Currently, the supported languages are as follows. The English name of the language is on the left side of the equals sign, and the value to be filled in the Language field is on the right side, following ISO639:
1. Chinese = "zh" # Chinese
2. Chinese_TW = "zh-TW" # Taiwan (China)
3. Chinese_DIALECT = "zh-dialect" # Chinese Dialect
4. English = "en" # English
5. Vietnamese = "vi" # Vietnamese
6. Japanese = "ja" # Japanese
7. Korean = "ko" # Korean
8. Indonesia = "id" # Indonesian
9. Thai = "th" # Thai
10. Portuguese = "pt" # Portuguese
11. Turkish = "tr" # Turkish
12. Arabic = "ar" # Arabic
13. Spanish = "es" # Spanish
14. Hindi = "hi" # Hindi
15. French = "fr" # French
16. Malay = "ms" # Malay
17. Filipino = "fil" # Filipino
18. German = "de" # German
19. Italian = "it" # Italian
20. Russian = "ru" # Russian
 * @method integer getInterruptMode() Obtain Interrupt ai speaking mode. default is 0. 0 indicates automatic interruption and 1 indicates no interruption.
 * @method void setInterruptMode(integer $InterruptMode) Set Interrupt ai speaking mode. default is 0. 0 indicates automatic interruption and 1 indicates no interruption.
 * @method integer getInterruptSpeechDuration() Obtain Used when InterruptMode is 0, unit in milliseconds, default is 500ms. It means that the server-side detects ongoing vocal input for the InterruptSpeechDuration milliseconds and then interrupts.
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) Set Used when InterruptMode is 0, unit in milliseconds, default is 500ms. It means that the server-side detects ongoing vocal input for the InterruptSpeechDuration milliseconds and then interrupts.
 * @method boolean getEndFunctionEnable() Obtain Whether the model supports (or enables) call_end function calling
 * @method void setEndFunctionEnable(boolean $EndFunctionEnable) Set Whether the model supports (or enables) call_end function calling
 * @method string getEndFunctionDesc() Obtain Effective when EndFunctionEnable is true; the description of call_end function calling, default is "End the call when user has to leave (like says bye) or you are instructed to do so."
 * @method void setEndFunctionDesc(string $EndFunctionDesc) Set Effective when EndFunctionEnable is true; the description of call_end function calling, default is "End the call when user has to leave (like says bye) or you are instructed to do so."
 * @method boolean getTransferFunctionEnable() Obtain Whether the model supports (or enables) transfer_to_human function calling.
 * @method void setTransferFunctionEnable(boolean $TransferFunctionEnable) Set Whether the model supports (or enables) transfer_to_human function calling.
 * @method array getTransferItems() Obtain Takes effect when transferfunctionenable is true: transfer to human configuration.
 * @method void setTransferItems(array $TransferItems) Set Takes effect when transferfunctionenable is true: transfer to human configuration.
 * @method integer getNotifyDuration() Obtain The duration after which the user hasn't spoken to trigger a notification, minimum 10 seconds, default 10 seconds
 * @method void setNotifyDuration(integer $NotifyDuration) Set The duration after which the user hasn't spoken to trigger a notification, minimum 10 seconds, default 10 seconds
 * @method string getNotifyMessage() Obtain The AI prompt when NotifyDuration has passed without the user speaking, default is "Sorry, I didn't hear you clearly. Can you repeat that?"
 * @method void setNotifyMessage(string $NotifyMessage) Set The AI prompt when NotifyDuration has passed without the user speaking, default is "Sorry, I didn't hear you clearly. Can you repeat that?"
 * @method integer getNotifyMaxCount() Obtain Maximum number of times to trigger ai prompt sound, unlimited by default.
 * @method void setNotifyMaxCount(integer $NotifyMaxCount) Set Maximum number of times to trigger ai prompt sound, unlimited by default.
 * @method string getCustomTTSConfig() Obtain <p>Either the VoiceType field or a custom TTS is required. this uses your own custom TTS, while VoiceType provides some built-in voice types.</p>.
<ul>
<li>Tencent TTS<br>
For configuration, see <a href="https://www.tencentcloud.comom/document/product/1073/92668?from_cn_redirect=1#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">tencent cloud TTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
"TTSType": "tencent", // String TTS type. currently supports "tencent" and "minixmax". the rest manufacturers are under support.
  "AppId": "your application ID", // String required.
  "SecretId": "your key ID", // String required.
  "SecretKey": "your Key", // String required.
  "VoiceType": 101001, // Integer  required. the voice ID, including standard timbre and premium timbre. premium timbre has higher fidelity and different pricing from standard timbre. please refer to the text to speech billing overview. for the complete supported timbre list, see the text to speech timbre list.
  "Speed": 1.25, // Integer optional, speaking rate, value range: [-2,6], respectively represent different speaking rates: -2: 0.6x -1: 0.8x 0: 1.0x (default) 1: 1.2x 2: 1.5x 6: 2.5x. if more refined speaking rates are needed, up to 2 decimal places can be retained, such as 0.5, 1.25, or 2.81. for parameter value to actual speech Speed conversion, refer to speech Speed switch.
  "Volume": 5, // Integer optional. specifies the Volume level. value range: [0,10], corresponding to 11 severity levels respectively. default value: 0, which represents normal Volume.
  "PrimaryLanguage": 1, // Integer option primary language 1-chinese (default) 2-english 3-japanese.
"FastVoiceType": "xxxx"   //  optional parameter. parameters for quick voice clone. 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
For configuration, refer to the <a href="https://platform.minimaxi.com/document/T2a%20V2?key=66719005a427f0c8a5701643" target="_blank">Minimax TTS documentation link</a>. note that Minimax TTS has frequency limits. overfrequency may result in response delays. see the <a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS frequency limit documentation link</a>.</li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "minimax",  // String TTS type. 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>Volcano TTS</li>.
</ul>
<p>Configure the timbre type. see <a href="https://www.volcengine.com/docs/6561/162929" target="_blank">volcano TTS documentation link</a><br>.
Text to speech timbre list - voice technology - volcano engine.
Large model TTS timbre list - voice technology - volcano engine</p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "volcengine",  // required: String TTS type.
"AppId": "xxxxxxxx",   // required: String AppId assigned by volcano engine.
"Token": "TY9d4sQXHxxxxxxx", // required: String type, access Token for volcano engine.
"Speed": 1.0,            // optional parameter. speaking rate, defaults to 1.0.
"Volume": 1.0,            // optional parameter, Volume, defaults to 1.0.
"Cluster": "volcano_tts", // optional parameter, business Cluster, is selected by default.
"VoiceType": "zh_male_aojiaobazong_moon_bigtts" // timbre type, defaults to the TTS voice type of the large model. if using ordinary text to speech, you need to fill in the corresponding voice type. input errors in voice type can cause no sound.
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
For configuration, refer to the <a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "azure", // required: String TTS type.
"SubscriptionKey": "xxxxxxxx", // required: String subscription Key.
"Region": "chinanorth3",  // required: String the Region to subscribe to.
"VoiceName": "zh-CN-XiaoxiaoNeural", // required: String specifies the required VoiceName.
"Language": "zh-CN", // required: String specifies the synthesis Language.  
"Rate": 1 // optional: float, speech speed. value range: 0.5–2. default is 1.
}
</code></pre>
</div><ul>
<li>Custom TTS</li>.
</ul>
<p>For the specific protocol specification, refer to <a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">tencent documentation</a></p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "custom", // String required.
"APIKey": "APIKey", // String required. be used to authenticate.
"APIUrl": "http://0.0.0.0:8080/stream-audio" // String, required, TTS API URL.
"AudioFormat": "wav", // String, optional, specifies the desired audio format, such as mp3, ogg_opus, pcm, wav. defaults to wav. currently only support pcm and wav.
"SampleRate": 16000,  // Integer, optional, audio sample rate, defaults to 16000 (16k), recommended value is 16000.
"AudioChannel": 1,    // Integer, optional, audio channel quantity. valid values: 1 or 2. default is 1.  
}
</code></pre>
</div>
 * @method void setCustomTTSConfig(string $CustomTTSConfig) Set <p>Either the VoiceType field or a custom TTS is required. this uses your own custom TTS, while VoiceType provides some built-in voice types.</p>.
<ul>
<li>Tencent TTS<br>
For configuration, see <a href="https://www.tencentcloud.comom/document/product/1073/92668?from_cn_redirect=1#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">tencent cloud TTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
"TTSType": "tencent", // String TTS type. currently supports "tencent" and "minixmax". the rest manufacturers are under support.
  "AppId": "your application ID", // String required.
  "SecretId": "your key ID", // String required.
  "SecretKey": "your Key", // String required.
  "VoiceType": 101001, // Integer  required. the voice ID, including standard timbre and premium timbre. premium timbre has higher fidelity and different pricing from standard timbre. please refer to the text to speech billing overview. for the complete supported timbre list, see the text to speech timbre list.
  "Speed": 1.25, // Integer optional, speaking rate, value range: [-2,6], respectively represent different speaking rates: -2: 0.6x -1: 0.8x 0: 1.0x (default) 1: 1.2x 2: 1.5x 6: 2.5x. if more refined speaking rates are needed, up to 2 decimal places can be retained, such as 0.5, 1.25, or 2.81. for parameter value to actual speech Speed conversion, refer to speech Speed switch.
  "Volume": 5, // Integer optional. specifies the Volume level. value range: [0,10], corresponding to 11 severity levels respectively. default value: 0, which represents normal Volume.
  "PrimaryLanguage": 1, // Integer option primary language 1-chinese (default) 2-english 3-japanese.
"FastVoiceType": "xxxx"   //  optional parameter. parameters for quick voice clone. 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
For configuration, refer to the <a href="https://platform.minimaxi.com/document/T2a%20V2?key=66719005a427f0c8a5701643" target="_blank">Minimax TTS documentation link</a>. note that Minimax TTS has frequency limits. overfrequency may result in response delays. see the <a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS frequency limit documentation link</a>.</li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "minimax",  // String TTS type. 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>Volcano TTS</li>.
</ul>
<p>Configure the timbre type. see <a href="https://www.volcengine.com/docs/6561/162929" target="_blank">volcano TTS documentation link</a><br>.
Text to speech timbre list - voice technology - volcano engine.
Large model TTS timbre list - voice technology - volcano engine</p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "volcengine",  // required: String TTS type.
"AppId": "xxxxxxxx",   // required: String AppId assigned by volcano engine.
"Token": "TY9d4sQXHxxxxxxx", // required: String type, access Token for volcano engine.
"Speed": 1.0,            // optional parameter. speaking rate, defaults to 1.0.
"Volume": 1.0,            // optional parameter, Volume, defaults to 1.0.
"Cluster": "volcano_tts", // optional parameter, business Cluster, is selected by default.
"VoiceType": "zh_male_aojiaobazong_moon_bigtts" // timbre type, defaults to the TTS voice type of the large model. if using ordinary text to speech, you need to fill in the corresponding voice type. input errors in voice type can cause no sound.
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
For configuration, refer to the <a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "azure", // required: String TTS type.
"SubscriptionKey": "xxxxxxxx", // required: String subscription Key.
"Region": "chinanorth3",  // required: String the Region to subscribe to.
"VoiceName": "zh-CN-XiaoxiaoNeural", // required: String specifies the required VoiceName.
"Language": "zh-CN", // required: String specifies the synthesis Language.  
"Rate": 1 // optional: float, speech speed. value range: 0.5–2. default is 1.
}
</code></pre>
</div><ul>
<li>Custom TTS</li>.
</ul>
<p>For the specific protocol specification, refer to <a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">tencent documentation</a></p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "custom", // String required.
"APIKey": "APIKey", // String required. be used to authenticate.
"APIUrl": "http://0.0.0.0:8080/stream-audio" // String, required, TTS API URL.
"AudioFormat": "wav", // String, optional, specifies the desired audio format, such as mp3, ogg_opus, pcm, wav. defaults to wav. currently only support pcm and wav.
"SampleRate": 16000,  // Integer, optional, audio sample rate, defaults to 16000 (16k), recommended value is 16000.
"AudioChannel": 1,    // Integer, optional, audio channel quantity. valid values: 1 or 2. default is 1.  
}
</code></pre>
</div>
 * @method array getPromptVariables() Obtain Prompt word variable.
 * @method void setPromptVariables(array $PromptVariables) Set Prompt word variable.
 * @method integer getVadSilenceTime() Obtain Automatic speech recognition vad time ranges from 240 to 2000, with a default of 1000, measured in milliseconds. smaller values will make automatic speech recognition segment faster.
 * @method void setVadSilenceTime(integer $VadSilenceTime) Set Automatic speech recognition vad time ranges from 240 to 2000, with a default of 1000, measured in milliseconds. smaller values will make automatic speech recognition segment faster.
 * @method array getExtractConfig() Obtain Call content extraction configuration.
 * @method void setExtractConfig(array $ExtractConfig) Set Call content extraction configuration.
 * @method float getTemperature() Obtain Model temperature control.
 * @method void setTemperature(float $Temperature) Set Model temperature control.
 * @method array getVariables() Obtain Common variable: <p>prompt content variable</p> <p>welcome message variable</p> <p>welcome message delay playback (in seconds): welcome-message-delay</p> <p>dify variable</p>.  

dify-inputs-xxx specifies the inputs variable for dify.
2. the dify-inputs-user specifies the user value for dify.
3. dify-inputs-conversation_id is the conversation_id value of dify.
 * @method void setVariables(array $Variables) Set Common variable: <p>prompt content variable</p> <p>welcome message variable</p> <p>welcome message delay playback (in seconds): welcome-message-delay</p> <p>dify variable</p>.  

dify-inputs-xxx specifies the inputs variable for dify.
2. the dify-inputs-user specifies the user value for dify.
3. dify-inputs-conversation_id is the conversation_id value of dify.
 * @method float getTopP() Obtain Specifies the model topP.
 * @method void setTopP(float $TopP) Set Specifies the model topP.
 * @method integer getVadLevel() Obtain The vad far-field voice suppression capacity (does not impact asr recognition performance). value range: [0, 3]. default is 0. recommended setting: 2 for better far-field voice suppression.
 * @method void setVadLevel(integer $VadLevel) Set The vad far-field voice suppression capacity (does not impact asr recognition performance). value range: [0, 3]. default is 0. recommended setting: 2 for better far-field voice suppression.
 * @method ToneWordInfo getToneWord() Obtain Transition.
 * @method void setToneWord(ToneWordInfo $ToneWord) Set Transition.
 * @method boolean getEnableComplianceAudio() Obtain Compliant prompt sound. 
This parameter set to true (default) means call initiation plays morse code, with a Note that the conversation content is AI-generated.
Passing 'false' to this parameter disables the compliance prompt sound. passing 'false' signifies you have read and agree to the following agreement:.
Our side fully acknowledges and understands that according to the laws and regulations specified in the "cybersecurity law" (https://www.cac.gov.cn/2016-11/07/c_1119867116.htm), "provision on administration of deep synthesis of internet-based information service" (https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm), "interim measures for the management of generative artificial intelligence services" (https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm), and "measures for the identification of artificial intelligence-generated synthetic content" (https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm), explicit and implicit identification should be added to ai-generated synthetic content. based on business requirements, we request tencent cloud not to add explicit identification to generated synthetic content. we commit to lawful and compliant use of generated synthetic content to avoid causing confusion or misunderstanding. if the generated synthetic content is used to provide services to the public or spread over networks, we will proactively add explicit identification that complies with legal provisions and national standards, and bear the legal obligation for identifying ai-generated synthetic content. our side will fully assume all related responsibilities if adverse consequences arise from failure to appropriately and reasonably fulfill the obligation of ai content identification, or if penalties are imposed by the competent department.
 * @method void setEnableComplianceAudio(boolean $EnableComplianceAudio) Set Compliant prompt sound. 
This parameter set to true (default) means call initiation plays morse code, with a Note that the conversation content is AI-generated.
Passing 'false' to this parameter disables the compliance prompt sound. passing 'false' signifies you have read and agree to the following agreement:.
Our side fully acknowledges and understands that according to the laws and regulations specified in the "cybersecurity law" (https://www.cac.gov.cn/2016-11/07/c_1119867116.htm), "provision on administration of deep synthesis of internet-based information service" (https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm), "interim measures for the management of generative artificial intelligence services" (https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm), and "measures for the identification of artificial intelligence-generated synthetic content" (https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm), explicit and implicit identification should be added to ai-generated synthetic content. based on business requirements, we request tencent cloud not to add explicit identification to generated synthetic content. we commit to lawful and compliant use of generated synthetic content to avoid causing confusion or misunderstanding. if the generated synthetic content is used to provide services to the public or spread over networks, we will proactively add explicit identification that complies with legal provisions and national standards, and bear the legal obligation for identifying ai-generated synthetic content. our side will fully assume all related responsibilities if adverse consequences arise from failure to appropriately and reasonably fulfill the obligation of ai content identification, or if penalties are imposed by the competent department.
 * @method boolean getEnableVoicemailDetection() Obtain Whether to enable voice mail recognition.
 * @method void setEnableVoicemailDetection(boolean $EnableVoicemailDetection) Set Whether to enable voice mail recognition.
 * @method integer getVoicemailAction() Obtain Detect behavior when the peer is voice mail. this parameter is valid only when EnableVoicemailDetection is True.
0: hang up the phone (default).
 * @method void setVoicemailAction(integer $VoicemailAction) Set Detect behavior when the peer is voice mail. this parameter is valid only when EnableVoicemailDetection is True.
0: hang up the phone (default).
 * @method string getLLMExtraBody() Obtain Large model extended parameter, format is json string.
 * @method void setLLMExtraBody(string $LLMExtraBody) Set Large model extended parameter, format is json string.
 * @method integer getMaxCallDurationMs() Obtain Maximum call duration, default not limited. unit: milliseconds (ms).
 * @method void setMaxCallDurationMs(integer $MaxCallDurationMs) Set Maximum call duration, default not limited. unit: milliseconds (ms).
 * @method integer getMaxRingTimeoutSecond() Obtain Maximum ringing duration. auto hang up when the duration threshold is reached. **only own number supports current parameter.**.
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) Set Maximum ringing duration. auto hang up when the duration threshold is reached. **only own number supports current parameter.**.
 */
class CreateAICallRequest extends AbstractModel
{
    /**
     * @var integer Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Called number.
     */
    public $Callee;

    /**
     * @var string Model API protocol type. currently compatible with four protocol types:.

-OpenAI protocol (including GPT, hunyuan, DeepSeek, etc.): "OpenAI".
-Azure protocol: "azure".
-Specifies the "Minimax" protocol.
-Dify protocol: "dify".
     */
    public $LLMType;

    /**
     * @var string Model API key, for authentication information, please refer to the respective model's official website

- OpenAI protocol: [GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key), [DeepSeek](https://api-docs.deepseek.com/zh-cn/);

- Azure protocol: [Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings);

- Minimax:[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
     */
    public $APIKey;

    /**
     * @var string Model interface address

- OpenAI protocol
GPT:"https://api.openai.com/v1/"
Deepseek:"https://api.deepseek.com/v1"

- Azure protocol
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax protocol
"https://api.minimax.chat/v1"
     */
    public $APIUrl;

    /**
     * @var string ## Identity
You are Kate from the appointment department at Retell Health calling Cindy over the phone to prepare for the annual checkup coming up. You are a pleasant and friendly receptionist caring deeply for the user. You don't provide medical advice but would use the medical knowledge to understand user responses.

## Style Guardrails
Be Concise: Respond succinctly, addressing one topic at most.
Embrace Variety: Use diverse language and rephrasing to enhance clarity without repeating content.
Be Conversational: Use everyday language, making the chat feel like talking to a friend.
Be Proactive: Lead the conversation, often wrapping up with a question or next-step suggestion.
Avoid multiple questions in a single response.
Get clarity: If the user only partially answers a question, or if the answer is unclear, keep asking to get clarity.
Use a colloquial way of referring to the date (like Friday, January 14th, or Tuesday, January 12th, 2024 at 8am).

## Response Guideline
Adapt and Guess: Try to understand transcripts that may contain transcription errors. Avoid mentioning "transcription error" in the response.
Stay in Character: Keep conversations within your role's scope, guiding them back creatively without repeating.
Ensure Fluid Dialogue: Respond in a role-appropriate, direct manner to maintain a smooth conversation flow.

## Task
You will follow the steps below, do not skip steps, and only ask up to one question in response.
If at any time the user showed anger or wanted a human agent, call transfer_call to transfer to a human representative.
1. Begin with a self-introduction and verify if callee is Cindy.
  - if callee is not Cindy, call end_call to hang up, say sorry for the confusion when hanging up.
  - if Cindy is not available, call end_call politely to hang up, say you will call back later when hanging up.
2. Inform Cindy she has an annual body check coming up on April 4th, 2024 at 10am PDT. Check if Cindy is available.
  - If not, tell Cindy to reschedule online and jump to step 5.
3. Ask Cindy if there's anything that the doctor should know before the annual checkup.
  - Ask followup questions as needed to assess the severity of the issue, and understand how it has progressed.
4. Tell Cindy to not eat or drink that day before the checkup. Also tell Cindy to give you a callback if there's any changes in health condition.
5. Ask Cindy if she has any questions, and if so, answer them until there are no questions.
  - If user asks something you do not know, let them know you don't have the answer. Ask them if they have any other questions.
  - If user do not have any questions, call function end_call to hang up.
     */
    public $SystemPrompt;

    /**
     * @var string Model name, such as

- OpenAI protocol
"gpt-4o-mini","gpt-4o","deepseek-chat";

- Azure protocol
"gpt-4o-mini", "gpt-4o";

- Minimax protocol
"deepseek-chat".
     */
    public $Model;

    /**
     * @var string The following voice parameter values are available by default. If you wish to customize the voice type, please leave VoiceType blank and configure it in the CustomTTSConfig parameter.

Chinese:
ZhiMei: Zhimei, customer service female voice
ZhiXi: Zhixi, general female voice
ZhiQi: Zhiqi, customer service female voice
ZhiTian: Zhitian, female child voice
AiXiaoJing: Ai Xiaojing, dialogue female voice

English:
WeRose:English Female Voice
Monika:English Female Voice

Japanese:
Nanami

Korean:
SunHi

Indonesian (Indonesia):
Gadis

Malay (Malaysia):
Yasmin

 Tamil (Malaysia):
Kani

Thai (Thailand):
Achara

Vietnamese (Vietnam):
HoaiMy


     */
    public $VoiceType;

    /**
     * @var array Caller number list
     */
    public $Callers;

    /**
     * @var string Used to set the AI Agent Welcome Message.
     */
    public $WelcomeMessage;

    /**
     * @var integer 0: Use welcomeMessage (if empty, the callee speaks first; if not empty, the bot speaks first)
1:   Use AI to automatically generate welcomeMessage and speak first based on the prompt
     */
    public $WelcomeType;

    /**
     * @var integer 0: interruptible by default, 2: high priority non-interruptible.
     */
    public $WelcomeMessagePriority;

    /**
     * @var integer Maximum Waiting Duration (milliseconds), default is 60 seconds, if the user does not speak within this time, the call is automatically terminated
     */
    public $MaxDuration;

    /**
     * @var array ASR Supported Languages, default is "zh" Chinese,
Fill in the array with up to 4 languages, the first is the primary language for recognition, followed by optional languages,
Note: When the primary language is a Chinese dialect, optional languages are invalid
Currently, the supported languages are as follows. The English name of the language is on the left side of the equals sign, and the value to be filled in the Language field is on the right side, following ISO639:
1. Chinese = "zh" # Chinese
2. Chinese_TW = "zh-TW" # Taiwan (China)
3. Chinese_DIALECT = "zh-dialect" # Chinese Dialect
4. English = "en" # English
5. Vietnamese = "vi" # Vietnamese
6. Japanese = "ja" # Japanese
7. Korean = "ko" # Korean
8. Indonesia = "id" # Indonesian
9. Thai = "th" # Thai
10. Portuguese = "pt" # Portuguese
11. Turkish = "tr" # Turkish
12. Arabic = "ar" # Arabic
13. Spanish = "es" # Spanish
14. Hindi = "hi" # Hindi
15. French = "fr" # French
16. Malay = "ms" # Malay
17. Filipino = "fil" # Filipino
18. German = "de" # German
19. Italian = "it" # Italian
20. Russian = "ru" # Russian
     */
    public $Languages;

    /**
     * @var integer Interrupt ai speaking mode. default is 0. 0 indicates automatic interruption and 1 indicates no interruption.
     */
    public $InterruptMode;

    /**
     * @var integer Used when InterruptMode is 0, unit in milliseconds, default is 500ms. It means that the server-side detects ongoing vocal input for the InterruptSpeechDuration milliseconds and then interrupts.
     */
    public $InterruptSpeechDuration;

    /**
     * @var boolean Whether the model supports (or enables) call_end function calling
     */
    public $EndFunctionEnable;

    /**
     * @var string Effective when EndFunctionEnable is true; the description of call_end function calling, default is "End the call when user has to leave (like says bye) or you are instructed to do so."
     */
    public $EndFunctionDesc;

    /**
     * @var boolean Whether the model supports (or enables) transfer_to_human function calling.
     */
    public $TransferFunctionEnable;

    /**
     * @var array Takes effect when transferfunctionenable is true: transfer to human configuration.
     */
    public $TransferItems;

    /**
     * @var integer The duration after which the user hasn't spoken to trigger a notification, minimum 10 seconds, default 10 seconds
     */
    public $NotifyDuration;

    /**
     * @var string The AI prompt when NotifyDuration has passed without the user speaking, default is "Sorry, I didn't hear you clearly. Can you repeat that?"
     */
    public $NotifyMessage;

    /**
     * @var integer Maximum number of times to trigger ai prompt sound, unlimited by default.
     */
    public $NotifyMaxCount;

    /**
     * @var string <p>Either the VoiceType field or a custom TTS is required. this uses your own custom TTS, while VoiceType provides some built-in voice types.</p>.
<ul>
<li>Tencent TTS<br>
For configuration, see <a href="https://www.tencentcloud.comom/document/product/1073/92668?from_cn_redirect=1#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">tencent cloud TTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
"TTSType": "tencent", // String TTS type. currently supports "tencent" and "minixmax". the rest manufacturers are under support.
  "AppId": "your application ID", // String required.
  "SecretId": "your key ID", // String required.
  "SecretKey": "your Key", // String required.
  "VoiceType": 101001, // Integer  required. the voice ID, including standard timbre and premium timbre. premium timbre has higher fidelity and different pricing from standard timbre. please refer to the text to speech billing overview. for the complete supported timbre list, see the text to speech timbre list.
  "Speed": 1.25, // Integer optional, speaking rate, value range: [-2,6], respectively represent different speaking rates: -2: 0.6x -1: 0.8x 0: 1.0x (default) 1: 1.2x 2: 1.5x 6: 2.5x. if more refined speaking rates are needed, up to 2 decimal places can be retained, such as 0.5, 1.25, or 2.81. for parameter value to actual speech Speed conversion, refer to speech Speed switch.
  "Volume": 5, // Integer optional. specifies the Volume level. value range: [0,10], corresponding to 11 severity levels respectively. default value: 0, which represents normal Volume.
  "PrimaryLanguage": 1, // Integer option primary language 1-chinese (default) 2-english 3-japanese.
"FastVoiceType": "xxxx"   //  optional parameter. parameters for quick voice clone. 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
For configuration, refer to the <a href="https://platform.minimaxi.com/document/T2a%20V2?key=66719005a427f0c8a5701643" target="_blank">Minimax TTS documentation link</a>. note that Minimax TTS has frequency limits. overfrequency may result in response delays. see the <a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS frequency limit documentation link</a>.</li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "minimax",  // String TTS type. 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>Volcano TTS</li>.
</ul>
<p>Configure the timbre type. see <a href="https://www.volcengine.com/docs/6561/162929" target="_blank">volcano TTS documentation link</a><br>.
Text to speech timbre list - voice technology - volcano engine.
Large model TTS timbre list - voice technology - volcano engine</p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "volcengine",  // required: String TTS type.
"AppId": "xxxxxxxx",   // required: String AppId assigned by volcano engine.
"Token": "TY9d4sQXHxxxxxxx", // required: String type, access Token for volcano engine.
"Speed": 1.0,            // optional parameter. speaking rate, defaults to 1.0.
"Volume": 1.0,            // optional parameter, Volume, defaults to 1.0.
"Cluster": "volcano_tts", // optional parameter, business Cluster, is selected by default.
"VoiceType": "zh_male_aojiaobazong_moon_bigtts" // timbre type, defaults to the TTS voice type of the large model. if using ordinary text to speech, you need to fill in the corresponding voice type. input errors in voice type can cause no sound.
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
For configuration, refer to the <a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "azure", // required: String TTS type.
"SubscriptionKey": "xxxxxxxx", // required: String subscription Key.
"Region": "chinanorth3",  // required: String the Region to subscribe to.
"VoiceName": "zh-CN-XiaoxiaoNeural", // required: String specifies the required VoiceName.
"Language": "zh-CN", // required: String specifies the synthesis Language.  
"Rate": 1 // optional: float, speech speed. value range: 0.5–2. default is 1.
}
</code></pre>
</div><ul>
<li>Custom TTS</li>.
</ul>
<p>For the specific protocol specification, refer to <a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">tencent documentation</a></p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "custom", // String required.
"APIKey": "APIKey", // String required. be used to authenticate.
"APIUrl": "http://0.0.0.0:8080/stream-audio" // String, required, TTS API URL.
"AudioFormat": "wav", // String, optional, specifies the desired audio format, such as mp3, ogg_opus, pcm, wav. defaults to wav. currently only support pcm and wav.
"SampleRate": 16000,  // Integer, optional, audio sample rate, defaults to 16000 (16k), recommended value is 16000.
"AudioChannel": 1,    // Integer, optional, audio channel quantity. valid values: 1 or 2. default is 1.  
}
</code></pre>
</div>
     */
    public $CustomTTSConfig;

    /**
     * @var array Prompt word variable.
     * @deprecated
     */
    public $PromptVariables;

    /**
     * @var integer Automatic speech recognition vad time ranges from 240 to 2000, with a default of 1000, measured in milliseconds. smaller values will make automatic speech recognition segment faster.
     */
    public $VadSilenceTime;

    /**
     * @var array Call content extraction configuration.
     */
    public $ExtractConfig;

    /**
     * @var float Model temperature control.
     */
    public $Temperature;

    /**
     * @var array Common variable: <p>prompt content variable</p> <p>welcome message variable</p> <p>welcome message delay playback (in seconds): welcome-message-delay</p> <p>dify variable</p>.  

dify-inputs-xxx specifies the inputs variable for dify.
2. the dify-inputs-user specifies the user value for dify.
3. dify-inputs-conversation_id is the conversation_id value of dify.
     */
    public $Variables;

    /**
     * @var float Specifies the model topP.
     */
    public $TopP;

    /**
     * @var integer The vad far-field voice suppression capacity (does not impact asr recognition performance). value range: [0, 3]. default is 0. recommended setting: 2 for better far-field voice suppression.
     */
    public $VadLevel;

    /**
     * @var ToneWordInfo Transition.
     */
    public $ToneWord;

    /**
     * @var boolean Compliant prompt sound. 
This parameter set to true (default) means call initiation plays morse code, with a Note that the conversation content is AI-generated.
Passing 'false' to this parameter disables the compliance prompt sound. passing 'false' signifies you have read and agree to the following agreement:.
Our side fully acknowledges and understands that according to the laws and regulations specified in the "cybersecurity law" (https://www.cac.gov.cn/2016-11/07/c_1119867116.htm), "provision on administration of deep synthesis of internet-based information service" (https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm), "interim measures for the management of generative artificial intelligence services" (https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm), and "measures for the identification of artificial intelligence-generated synthetic content" (https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm), explicit and implicit identification should be added to ai-generated synthetic content. based on business requirements, we request tencent cloud not to add explicit identification to generated synthetic content. we commit to lawful and compliant use of generated synthetic content to avoid causing confusion or misunderstanding. if the generated synthetic content is used to provide services to the public or spread over networks, we will proactively add explicit identification that complies with legal provisions and national standards, and bear the legal obligation for identifying ai-generated synthetic content. our side will fully assume all related responsibilities if adverse consequences arise from failure to appropriately and reasonably fulfill the obligation of ai content identification, or if penalties are imposed by the competent department.
     */
    public $EnableComplianceAudio;

    /**
     * @var boolean Whether to enable voice mail recognition.
     */
    public $EnableVoicemailDetection;

    /**
     * @var integer Detect behavior when the peer is voice mail. this parameter is valid only when EnableVoicemailDetection is True.
0: hang up the phone (default).
     */
    public $VoicemailAction;

    /**
     * @var string Large model extended parameter, format is json string.
     */
    public $LLMExtraBody;

    /**
     * @var integer Maximum call duration, default not limited. unit: milliseconds (ms).
     */
    public $MaxCallDurationMs;

    /**
     * @var integer Maximum ringing duration. auto hang up when the duration threshold is reached. **only own number supports current parameter.**.
     */
    public $MaxRingTimeoutSecond;

    /**
     * @param integer $SdkAppId Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $Callee Called number.
     * @param string $LLMType Model API protocol type. currently compatible with four protocol types:.

-OpenAI protocol (including GPT, hunyuan, DeepSeek, etc.): "OpenAI".
-Azure protocol: "azure".
-Specifies the "Minimax" protocol.
-Dify protocol: "dify".
     * @param string $APIKey Model API key, for authentication information, please refer to the respective model's official website

- OpenAI protocol: [GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key), [DeepSeek](https://api-docs.deepseek.com/zh-cn/);

- Azure protocol: [Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings);

- Minimax:[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
     * @param string $APIUrl Model interface address

- OpenAI protocol
GPT:"https://api.openai.com/v1/"
Deepseek:"https://api.deepseek.com/v1"

- Azure protocol
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax protocol
"https://api.minimax.chat/v1"
     * @param string $SystemPrompt ## Identity
You are Kate from the appointment department at Retell Health calling Cindy over the phone to prepare for the annual checkup coming up. You are a pleasant and friendly receptionist caring deeply for the user. You don't provide medical advice but would use the medical knowledge to understand user responses.

## Style Guardrails
Be Concise: Respond succinctly, addressing one topic at most.
Embrace Variety: Use diverse language and rephrasing to enhance clarity without repeating content.
Be Conversational: Use everyday language, making the chat feel like talking to a friend.
Be Proactive: Lead the conversation, often wrapping up with a question or next-step suggestion.
Avoid multiple questions in a single response.
Get clarity: If the user only partially answers a question, or if the answer is unclear, keep asking to get clarity.
Use a colloquial way of referring to the date (like Friday, January 14th, or Tuesday, January 12th, 2024 at 8am).

## Response Guideline
Adapt and Guess: Try to understand transcripts that may contain transcription errors. Avoid mentioning "transcription error" in the response.
Stay in Character: Keep conversations within your role's scope, guiding them back creatively without repeating.
Ensure Fluid Dialogue: Respond in a role-appropriate, direct manner to maintain a smooth conversation flow.

## Task
You will follow the steps below, do not skip steps, and only ask up to one question in response.
If at any time the user showed anger or wanted a human agent, call transfer_call to transfer to a human representative.
1. Begin with a self-introduction and verify if callee is Cindy.
  - if callee is not Cindy, call end_call to hang up, say sorry for the confusion when hanging up.
  - if Cindy is not available, call end_call politely to hang up, say you will call back later when hanging up.
2. Inform Cindy she has an annual body check coming up on April 4th, 2024 at 10am PDT. Check if Cindy is available.
  - If not, tell Cindy to reschedule online and jump to step 5.
3. Ask Cindy if there's anything that the doctor should know before the annual checkup.
  - Ask followup questions as needed to assess the severity of the issue, and understand how it has progressed.
4. Tell Cindy to not eat or drink that day before the checkup. Also tell Cindy to give you a callback if there's any changes in health condition.
5. Ask Cindy if she has any questions, and if so, answer them until there are no questions.
  - If user asks something you do not know, let them know you don't have the answer. Ask them if they have any other questions.
  - If user do not have any questions, call function end_call to hang up.
     * @param string $Model Model name, such as

- OpenAI protocol
"gpt-4o-mini","gpt-4o","deepseek-chat";

- Azure protocol
"gpt-4o-mini", "gpt-4o";

- Minimax protocol
"deepseek-chat".
     * @param string $VoiceType The following voice parameter values are available by default. If you wish to customize the voice type, please leave VoiceType blank and configure it in the CustomTTSConfig parameter.

Chinese:
ZhiMei: Zhimei, customer service female voice
ZhiXi: Zhixi, general female voice
ZhiQi: Zhiqi, customer service female voice
ZhiTian: Zhitian, female child voice
AiXiaoJing: Ai Xiaojing, dialogue female voice

English:
WeRose:English Female Voice
Monika:English Female Voice

Japanese:
Nanami

Korean:
SunHi

Indonesian (Indonesia):
Gadis

Malay (Malaysia):
Yasmin

 Tamil (Malaysia):
Kani

Thai (Thailand):
Achara

Vietnamese (Vietnam):
HoaiMy


     * @param array $Callers Caller number list
     * @param string $WelcomeMessage Used to set the AI Agent Welcome Message.
     * @param integer $WelcomeType 0: Use welcomeMessage (if empty, the callee speaks first; if not empty, the bot speaks first)
1:   Use AI to automatically generate welcomeMessage and speak first based on the prompt
     * @param integer $WelcomeMessagePriority 0: interruptible by default, 2: high priority non-interruptible.
     * @param integer $MaxDuration Maximum Waiting Duration (milliseconds), default is 60 seconds, if the user does not speak within this time, the call is automatically terminated
     * @param array $Languages ASR Supported Languages, default is "zh" Chinese,
Fill in the array with up to 4 languages, the first is the primary language for recognition, followed by optional languages,
Note: When the primary language is a Chinese dialect, optional languages are invalid
Currently, the supported languages are as follows. The English name of the language is on the left side of the equals sign, and the value to be filled in the Language field is on the right side, following ISO639:
1. Chinese = "zh" # Chinese
2. Chinese_TW = "zh-TW" # Taiwan (China)
3. Chinese_DIALECT = "zh-dialect" # Chinese Dialect
4. English = "en" # English
5. Vietnamese = "vi" # Vietnamese
6. Japanese = "ja" # Japanese
7. Korean = "ko" # Korean
8. Indonesia = "id" # Indonesian
9. Thai = "th" # Thai
10. Portuguese = "pt" # Portuguese
11. Turkish = "tr" # Turkish
12. Arabic = "ar" # Arabic
13. Spanish = "es" # Spanish
14. Hindi = "hi" # Hindi
15. French = "fr" # French
16. Malay = "ms" # Malay
17. Filipino = "fil" # Filipino
18. German = "de" # German
19. Italian = "it" # Italian
20. Russian = "ru" # Russian
     * @param integer $InterruptMode Interrupt ai speaking mode. default is 0. 0 indicates automatic interruption and 1 indicates no interruption.
     * @param integer $InterruptSpeechDuration Used when InterruptMode is 0, unit in milliseconds, default is 500ms. It means that the server-side detects ongoing vocal input for the InterruptSpeechDuration milliseconds and then interrupts.
     * @param boolean $EndFunctionEnable Whether the model supports (or enables) call_end function calling
     * @param string $EndFunctionDesc Effective when EndFunctionEnable is true; the description of call_end function calling, default is "End the call when user has to leave (like says bye) or you are instructed to do so."
     * @param boolean $TransferFunctionEnable Whether the model supports (or enables) transfer_to_human function calling.
     * @param array $TransferItems Takes effect when transferfunctionenable is true: transfer to human configuration.
     * @param integer $NotifyDuration The duration after which the user hasn't spoken to trigger a notification, minimum 10 seconds, default 10 seconds
     * @param string $NotifyMessage The AI prompt when NotifyDuration has passed without the user speaking, default is "Sorry, I didn't hear you clearly. Can you repeat that?"
     * @param integer $NotifyMaxCount Maximum number of times to trigger ai prompt sound, unlimited by default.
     * @param string $CustomTTSConfig <p>Either the VoiceType field or a custom TTS is required. this uses your own custom TTS, while VoiceType provides some built-in voice types.</p>.
<ul>
<li>Tencent TTS<br>
For configuration, see <a href="https://www.tencentcloud.comom/document/product/1073/92668?from_cn_redirect=1#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">tencent cloud TTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
"TTSType": "tencent", // String TTS type. currently supports "tencent" and "minixmax". the rest manufacturers are under support.
  "AppId": "your application ID", // String required.
  "SecretId": "your key ID", // String required.
  "SecretKey": "your Key", // String required.
  "VoiceType": 101001, // Integer  required. the voice ID, including standard timbre and premium timbre. premium timbre has higher fidelity and different pricing from standard timbre. please refer to the text to speech billing overview. for the complete supported timbre list, see the text to speech timbre list.
  "Speed": 1.25, // Integer optional, speaking rate, value range: [-2,6], respectively represent different speaking rates: -2: 0.6x -1: 0.8x 0: 1.0x (default) 1: 1.2x 2: 1.5x 6: 2.5x. if more refined speaking rates are needed, up to 2 decimal places can be retained, such as 0.5, 1.25, or 2.81. for parameter value to actual speech Speed conversion, refer to speech Speed switch.
  "Volume": 5, // Integer optional. specifies the Volume level. value range: [0,10], corresponding to 11 severity levels respectively. default value: 0, which represents normal Volume.
  "PrimaryLanguage": 1, // Integer option primary language 1-chinese (default) 2-english 3-japanese.
"FastVoiceType": "xxxx"   //  optional parameter. parameters for quick voice clone. 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
For configuration, refer to the <a href="https://platform.minimaxi.com/document/T2a%20V2?key=66719005a427f0c8a5701643" target="_blank">Minimax TTS documentation link</a>. note that Minimax TTS has frequency limits. overfrequency may result in response delays. see the <a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS frequency limit documentation link</a>.</li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "minimax",  // String TTS type. 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>Volcano TTS</li>.
</ul>
<p>Configure the timbre type. see <a href="https://www.volcengine.com/docs/6561/162929" target="_blank">volcano TTS documentation link</a><br>.
Text to speech timbre list - voice technology - volcano engine.
Large model TTS timbre list - voice technology - volcano engine</p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "volcengine",  // required: String TTS type.
"AppId": "xxxxxxxx",   // required: String AppId assigned by volcano engine.
"Token": "TY9d4sQXHxxxxxxx", // required: String type, access Token for volcano engine.
"Speed": 1.0,            // optional parameter. speaking rate, defaults to 1.0.
"Volume": 1.0,            // optional parameter, Volume, defaults to 1.0.
"Cluster": "volcano_tts", // optional parameter, business Cluster, is selected by default.
"VoiceType": "zh_male_aojiaobazong_moon_bigtts" // timbre type, defaults to the TTS voice type of the large model. if using ordinary text to speech, you need to fill in the corresponding voice type. input errors in voice type can cause no sound.
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
For configuration, refer to the <a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS documentation link</a></li>.
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "azure", // required: String TTS type.
"SubscriptionKey": "xxxxxxxx", // required: String subscription Key.
"Region": "chinanorth3",  // required: String the Region to subscribe to.
"VoiceName": "zh-CN-XiaoxiaoNeural", // required: String specifies the required VoiceName.
"Language": "zh-CN", // required: String specifies the synthesis Language.  
"Rate": 1 // optional: float, speech speed. value range: 0.5–2. default is 1.
}
</code></pre>
</div><ul>
<li>Custom TTS</li>.
</ul>
<p>For the specific protocol specification, refer to <a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">tencent documentation</a></p>.
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
"TTSType": "custom", // String required.
"APIKey": "APIKey", // String required. be used to authenticate.
"APIUrl": "http://0.0.0.0:8080/stream-audio" // String, required, TTS API URL.
"AudioFormat": "wav", // String, optional, specifies the desired audio format, such as mp3, ogg_opus, pcm, wav. defaults to wav. currently only support pcm and wav.
"SampleRate": 16000,  // Integer, optional, audio sample rate, defaults to 16000 (16k), recommended value is 16000.
"AudioChannel": 1,    // Integer, optional, audio channel quantity. valid values: 1 or 2. default is 1.  
}
</code></pre>
</div>
     * @param array $PromptVariables Prompt word variable.
     * @param integer $VadSilenceTime Automatic speech recognition vad time ranges from 240 to 2000, with a default of 1000, measured in milliseconds. smaller values will make automatic speech recognition segment faster.
     * @param array $ExtractConfig Call content extraction configuration.
     * @param float $Temperature Model temperature control.
     * @param array $Variables Common variable: <p>prompt content variable</p> <p>welcome message variable</p> <p>welcome message delay playback (in seconds): welcome-message-delay</p> <p>dify variable</p>.  

dify-inputs-xxx specifies the inputs variable for dify.
2. the dify-inputs-user specifies the user value for dify.
3. dify-inputs-conversation_id is the conversation_id value of dify.
     * @param float $TopP Specifies the model topP.
     * @param integer $VadLevel The vad far-field voice suppression capacity (does not impact asr recognition performance). value range: [0, 3]. default is 0. recommended setting: 2 for better far-field voice suppression.
     * @param ToneWordInfo $ToneWord Transition.
     * @param boolean $EnableComplianceAudio Compliant prompt sound. 
This parameter set to true (default) means call initiation plays morse code, with a Note that the conversation content is AI-generated.
Passing 'false' to this parameter disables the compliance prompt sound. passing 'false' signifies you have read and agree to the following agreement:.
Our side fully acknowledges and understands that according to the laws and regulations specified in the "cybersecurity law" (https://www.cac.gov.cn/2016-11/07/c_1119867116.htm), "provision on administration of deep synthesis of internet-based information service" (https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm), "interim measures for the management of generative artificial intelligence services" (https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm), and "measures for the identification of artificial intelligence-generated synthetic content" (https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm), explicit and implicit identification should be added to ai-generated synthetic content. based on business requirements, we request tencent cloud not to add explicit identification to generated synthetic content. we commit to lawful and compliant use of generated synthetic content to avoid causing confusion or misunderstanding. if the generated synthetic content is used to provide services to the public or spread over networks, we will proactively add explicit identification that complies with legal provisions and national standards, and bear the legal obligation for identifying ai-generated synthetic content. our side will fully assume all related responsibilities if adverse consequences arise from failure to appropriately and reasonably fulfill the obligation of ai content identification, or if penalties are imposed by the competent department.
     * @param boolean $EnableVoicemailDetection Whether to enable voice mail recognition.
     * @param integer $VoicemailAction Detect behavior when the peer is voice mail. this parameter is valid only when EnableVoicemailDetection is True.
0: hang up the phone (default).
     * @param string $LLMExtraBody Large model extended parameter, format is json string.
     * @param integer $MaxCallDurationMs Maximum call duration, default not limited. unit: milliseconds (ms).
     * @param integer $MaxRingTimeoutSecond Maximum ringing duration. auto hang up when the duration threshold is reached. **only own number supports current parameter.**.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("LLMType",$param) and $param["LLMType"] !== null) {
            $this->LLMType = $param["LLMType"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("APIUrl",$param) and $param["APIUrl"] !== null) {
            $this->APIUrl = $param["APIUrl"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }

        if (array_key_exists("WelcomeType",$param) and $param["WelcomeType"] !== null) {
            $this->WelcomeType = $param["WelcomeType"];
        }

        if (array_key_exists("WelcomeMessagePriority",$param) and $param["WelcomeMessagePriority"] !== null) {
            $this->WelcomeMessagePriority = $param["WelcomeMessagePriority"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptSpeechDuration",$param) and $param["InterruptSpeechDuration"] !== null) {
            $this->InterruptSpeechDuration = $param["InterruptSpeechDuration"];
        }

        if (array_key_exists("EndFunctionEnable",$param) and $param["EndFunctionEnable"] !== null) {
            $this->EndFunctionEnable = $param["EndFunctionEnable"];
        }

        if (array_key_exists("EndFunctionDesc",$param) and $param["EndFunctionDesc"] !== null) {
            $this->EndFunctionDesc = $param["EndFunctionDesc"];
        }

        if (array_key_exists("TransferFunctionEnable",$param) and $param["TransferFunctionEnable"] !== null) {
            $this->TransferFunctionEnable = $param["TransferFunctionEnable"];
        }

        if (array_key_exists("TransferItems",$param) and $param["TransferItems"] !== null) {
            $this->TransferItems = [];
            foreach ($param["TransferItems"] as $key => $value){
                $obj = new AITransferItem();
                $obj->deserialize($value);
                array_push($this->TransferItems, $obj);
            }
        }

        if (array_key_exists("NotifyDuration",$param) and $param["NotifyDuration"] !== null) {
            $this->NotifyDuration = $param["NotifyDuration"];
        }

        if (array_key_exists("NotifyMessage",$param) and $param["NotifyMessage"] !== null) {
            $this->NotifyMessage = $param["NotifyMessage"];
        }

        if (array_key_exists("NotifyMaxCount",$param) and $param["NotifyMaxCount"] !== null) {
            $this->NotifyMaxCount = $param["NotifyMaxCount"];
        }

        if (array_key_exists("CustomTTSConfig",$param) and $param["CustomTTSConfig"] !== null) {
            $this->CustomTTSConfig = $param["CustomTTSConfig"];
        }

        if (array_key_exists("PromptVariables",$param) and $param["PromptVariables"] !== null) {
            $this->PromptVariables = [];
            foreach ($param["PromptVariables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->PromptVariables, $obj);
            }
        }

        if (array_key_exists("VadSilenceTime",$param) and $param["VadSilenceTime"] !== null) {
            $this->VadSilenceTime = $param["VadSilenceTime"];
        }

        if (array_key_exists("ExtractConfig",$param) and $param["ExtractConfig"] !== null) {
            $this->ExtractConfig = [];
            foreach ($param["ExtractConfig"] as $key => $value){
                $obj = new AICallExtractConfigElement();
                $obj->deserialize($value);
                array_push($this->ExtractConfig, $obj);
            }
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("VadLevel",$param) and $param["VadLevel"] !== null) {
            $this->VadLevel = $param["VadLevel"];
        }

        if (array_key_exists("ToneWord",$param) and $param["ToneWord"] !== null) {
            $this->ToneWord = new ToneWordInfo();
            $this->ToneWord->deserialize($param["ToneWord"]);
        }

        if (array_key_exists("EnableComplianceAudio",$param) and $param["EnableComplianceAudio"] !== null) {
            $this->EnableComplianceAudio = $param["EnableComplianceAudio"];
        }

        if (array_key_exists("EnableVoicemailDetection",$param) and $param["EnableVoicemailDetection"] !== null) {
            $this->EnableVoicemailDetection = $param["EnableVoicemailDetection"];
        }

        if (array_key_exists("VoicemailAction",$param) and $param["VoicemailAction"] !== null) {
            $this->VoicemailAction = $param["VoicemailAction"];
        }

        if (array_key_exists("LLMExtraBody",$param) and $param["LLMExtraBody"] !== null) {
            $this->LLMExtraBody = $param["LLMExtraBody"];
        }

        if (array_key_exists("MaxCallDurationMs",$param) and $param["MaxCallDurationMs"] !== null) {
            $this->MaxCallDurationMs = $param["MaxCallDurationMs"];
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }
    }
}
